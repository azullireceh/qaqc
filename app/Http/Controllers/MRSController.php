<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ambil tabel model
use App\Models\mr;
use App\Models\materialmr;
use App\Models\historymr;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Validation\ValidatesRequests;

class MRSController extends Controller
{
    use ValidatesRequests;
    //index mrs
    public function IndexMrs()
    {
        $data_mrs = \App\Models\mr::all();
        return view('mrs.admintabelmrs',['data_mrs' => $data_mrs]);
    }
    //input data mrs
    public function FormInputMrs()
    {      
        //untuk dada ID MRS
        $data_mrs = \App\Models\mr::all();
        $data_historymrs = \App\Models\historymr::all();
            if(count($data_mrs)<1){
                $data_mrs_id=1;
            }
            else{
                $data_mrs_idx = \App\Models\mr::latest()->first();
                $data_mrs_id= $data_mrs_idx->id + 1;
            }

        //untuk dada ID history
        $data_history = \App\Models\historymr::all();
            if(count($data_history)<1){
                $data_history_id=1;
            }
            else{
                $data_history_idx = \App\Models\historymr::latest()->first();
                $data_history_id= $data_history_idx->id + 1;
            }
        //return view('mrs/admininputmrs',['data_mrs_id'=>$data_mrs_id]);
        return view('mrs/admininputmrs',['data_mrs_id'=>$data_mrs_id,'data_history_id'=>$data_history_id]);
    }

    public function CreateMrs(Request $req)
    {   
        if ($req->hasfile('nm_pnid')) 
        {   
            $file = $req->file('nm_pnid');
            $fileext=$file->getClientOriginalExtension();
            $filesize=$file->getSize();
            if($fileext=='pdf' and $filesize<=26000000)
                {
                    $filename = round(microtime(true) * 1000).'-'.$req->nm_id_mrs.'-'.str_replace(' ','-',$req->file('nm_pnid')->getClientOriginalName());
                    //$req->file('nm_pnid')->move(public_path('storage/pnid'), $filename);
                    $req->file('nm_pnid')->move(public_path('storage/'.$req->nm_id_mrs.'/pnid'), $filename);
                }         
            else
                {
                    return redirect('mrs/forminput')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');  
                }             
    }else
        {            
            $filename = "";
        }

        //create data mrs ke database
        $data_mrs= new mr;
        $data_mrs->id_mrs=$req->nm_id_mrs;
        $data_mrs->status_mrs=$req->nm_status_mrs;        
        $data_mrs->link=$req->nm_link;
        $data_mrs->path_qr=$req->nm_path_qr;
        $data_mrs->path_pnid=$filename;
        $data_mrs->save();

        //create data history mrs ke database
        $data_historymrs=new historymr;
        $data_historymrs->idmrs=$req->nm_idmrs;
        $data_historymrs->id_mrs=$req->nm_id_mrs;
        $data_historymrs->id_historymrs=$req->nm_id_historymrs;
        $data_historymrs->project=$req->nm_project;
        $data_historymrs->tahun_project=$req->nm_tahun_pembuatan;
        $data_historymrs->spesifikasi=$req->nm_spesifikasi;
        $data_historymrs->jenis_meter=$req->nm_jenis_meter;
        $data_historymrs->stream=$req->nm_stream;
        $data_historymrs->qty_evc=$req->nm_qty_evc;
        $data_historymrs->qty_psv_prv=$req->nm_qty_psv_prv;
        $data_historymrs->qty_filter_pv=$req->nm_qty_filter_pv;
        $data_historymrs->tanggal_sertifikasi=$req->nm_tanggal_sertifikasi;
        $data_historymrs->sertifikat_coiplo="";
        $data_historymrs->save();

        //qr code
        //$qrCodePath = 'qrcodes/' . $certificate->id . '.png';
        $fullPathqr = storage_path('app/public/'.$req->nm_id_mrs. '/qrcode' .'/'. $req->nm_path_qr);

        // Cek apakah folder qrcodes sudah ada, jika belum buat folder tersebut
        if (!file_exists(dirname($fullPathqr))) {
            mkdir(dirname($fullPathqr), 0755, true);
        }
        QrCode::format('png')->size(200)->generate($req->nm_link,$fullPathqr);
                       
        return redirect('/mrs')->with('sukses','Data Berhasil Di Submit');   
    }

    //update mrs
    public function ShowMrs($id)
    {        
        $data_id_mrs= mr::find($id);
        return view('mrs/admineditmrs',['data_id_mrs'=>$data_id_mrs]);
    }

    public function UpdateMrs(Request $req)
    {              
        if ($req->hasfile('nm_pnid')) 
        {   
            $file = $req->file('nm_pnid');
            $fileext=$file->getClientOriginalExtension();
            $filesize=$file->getSize();
                if($fileext=='pdf' and $filesize<=26000000)
                    {
                        $filename = round(microtime(true) * 1000).'-'.$req->nm_id_mrs.'-'.str_replace(' ','-',$req->file('nm_pnid')->getClientOriginalName());
                        //$req->file('nm_pnid')->move(public_path('storage/pnid'), $filename);
                        $req->file('nm_pnid')->move(public_path('storage/'.$req->nm_id_mrs.'/pnid'), $filename);
                        storage::delete('public/'.$req->nm_id_mrs.'/pnid'.'/'.$req->nm_path_pnid);
                    }         
                else
                    {
                        return redirect('mrs/forminput')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');  
                    }                
        }else
        {            
            $filename = $req->nm_pnid;
        }

        $data_mrs=mr::find($req->nm_idmrs);
        $data_mrs->status_mrs=$req->nm_status_mrs;
        $data_mrs->path_pnid=$filename;
        $data_mrs->update();       

        return redirect('/mrs')->with('sukses','Data Berhasil Di Update');
    }

    //delete mrs
    public function DeleteMrs($id)
    {                
        $data_id= mr::find($id);
        storage::delete('public/'.$data_id->id_mrs.'/qrcode'.'/'.$data_id->path_qr);
        storage::delete('public/'.$data_id->id_mrs.'/pnid'.'/'.$data_id->path_pnid);
        $data_id->delete();
        
        return redirect('/mrs')->with('suskses','Data Berhasil Di hapus'); 
    }

    //lihat material mrs
    public function showMaterialMrs($id)
    {        
        $data_id= mr::find($id);
        //$data_id_mrs=mr::find($id_mrs);
       // dd($data_id);
        //return view('mrs.materialmrs');
        return view('mrs/materialmrs',['data_id'=>$data_id]);

    }

    public function ViewMrs($id)
    {        
        $data_id_mrs= mr::find($id);
        //return view('viewbarcode/viewdetailmrs',['data_id_mrs'=>$data_id_mrs]);

        //$data_history= historymr::where('id_mrs', 'like',"%$id_mrs_history%")->get();
        $data_historymrs= historymr::where('id_mrs', 'like',"%$data_id_mrs->id_mrs%")->latest()->first();
        //Echo $data_historymrs;        

        //$data_historymrs = \App\Models\mr::latest()->first();

        $data_material_mrs= materialmr::where('id_mrs', 'like',"%$data_id_mrs->id_mrs%")->get();
        
        return view('viewbarcode/viewdetailmrs',['data_id_mrs'=>$data_id_mrs,'data_historymrs'=>$data_historymrs,'data_material_mrs'=>$data_material_mrs]);

    }
}
