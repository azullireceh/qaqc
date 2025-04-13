<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mr;
use App\Models\historymr;

use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Validation\ValidatesRequests;

class HistoryMrsController extends Controller
{
    //
    use ValidatesRequests;
    //index mrs
    public function IndexHistoryMrs($id)
    {
              
        $data_id_mrs= mr::find($id);
        //dd($data_id_mrs);
        $id_mrs_history = $data_id_mrs->id_mrs;
        //echo $id_mrs_material;
        $data_history= historymr::where('id_mrs', 'like',"%$id_mrs_history%")->get();        
        //echo $data_material;
        //dd($data_material);
        return view('historymrs/admintabelhistorymrs',['data_id_mrs'=>$data_id_mrs,'data_history'=>$data_history]);
        
    }

    //input data mrs
    public function FormInputHistoryMrs($id)
    {      
        $data_id_mrs= mr::find($id);
        //$data_id_historymrs= historymr::find($id);
        $data_histroymrs_idx = \App\Models\historymr::latest()->first();
        $data_historymrs_id= $data_histroymrs_idx->id + 1;
        return view('historymrs/admininputhistorymrs',['data_id_mrs'=>$data_id_mrs, 'data_historymrs_id'=>$data_historymrs_id]);
    }

    //create history mrs
    public function CreateHistoryMrs(Request $req)
    {   
        $id_mrs=$req->nm_idmrs;
        
        // Upload COIPLO
        if ($req->hasfile('nm_coiplo')) 
            {   
                $file = $req->file('nm_coiplo');
                $fileext=$file->getClientOriginalExtension();
                $filesize=$file->getSize();

                if($fileext=='pdf' and $filesize<=26000000)
                    {
                        
                        $filenamecoiplo = round(microtime(true) * 1000).'-COIPLO-'.$req->nm_id_mrs.'-'.$req->nm_historymrs.'-'.str_replace(' ','-',$req->file('nm_coiplo')->getClientOriginalName());
                        $req->file('nm_coiplo')->move(public_path('storage/'.$req->nm_id_mrs.'/coiplo'), $filenamecoiplo);
                    }         
                else
                    {
                        return redirect('/historymrs/'.$id_mrs.'/forminputhistorymrs')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');  
                    }             
            }
        else
            {     
            $filenamecoiplo = "";
            }
        //echo "berhasil";    
        //bisa dipake session()->flash('sukses','Data Berhasil Di Submit');        
        //dipakereturn view('materialmrs/admintabelmaterialmrs',['data_id_mrs'=>$data_id_mrs,'data_material'=>$data_material]);
        //$id_mrs=$req->nm_id;

        $data_historymrs=new historymr;
        $data_historymrs->idmrs=$req->nm_idmrs;
        $data_historymrs->id_mrs=$req->nm_id_mrs;
        $data_historymrs->id_historymrs=$req->nm_historymrs;
        $data_historymrs->project=$req->nm_project;
        $data_historymrs->tahun_project=$req->nm_tahun_project;
        $data_historymrs->spesifikasi=$req->nm_spesifikasi;
        $data_historymrs->jenis_meter=$req->nm_jenis_meter;
        $data_historymrs->stream=$req->nm_stream;
        $data_historymrs->qty_evc=$req->nm_qty_evc;
        $data_historymrs->qty_psv_prv=$req->nm_qty_psv_prv;
        $data_historymrs->qty_filter_pv=$req->nm_qty_filter_pv;        
        $data_historymrs->tanggal_sertifikasi=$req->nm_tanggal_sertifikasi;
        $data_historymrs->sertifikat_coiplo=$filenamecoiplo;
        $data_historymrs->save();
        
        return redirect('/historymrs/'.$id_mrs.'/historymrs')->with('sukses','Data Berhasil Di Submit');                
    }
    //delete history mrs
    public function DeleteHistoryMrs($id)
    {                
        $data_id= historymr::find($id);
        $id_mrs=$data_id->idmrs;
        //delete sertifikat coiplo
        storage::delete('public/'.$data_id->id_mrs.'/coiplo'.'/'.$data_id->sertifikat_coiplo);

        $data_id->delete();
        //return redirect('/materialmrs/'.$id_mrs.'/materialmrs')->with('sukses','Data Berhasil Di Hapus'); 
        return redirect('/historymrs/'.$id_mrs.'/historymrs')->with('sukses','Data Berhasil Di Hapus');
    }

    //Show Data History mrs
    public function ShowHistoryMrs($id)
    {       
        //echo $id; 
        $data_id= historymr::find($id);
        //dd($data_id);
        return view('historymrs/adminedithistorymrs',['data_id'=>$data_id]);
    }

    //Update Data History MRS
    public function UpdateHistoryMrs(Request $req)
    {         
        $id_mrs=$req->nm_idmrs;
        $data_historymrs=historymr::find($req->nm_idhistorymrs);
        
        // Upload COIPLO
        if ($req->hasfile('nm_coiplo')) 
            {   
                $file = $req->file('nm_coiplo');
                $fileext=$file->getClientOriginalExtension();
                $filesize=$file->getSize();

                if($fileext=='pdf' and $filesize<=26000000)
                    {
                        
                        $filenamecoiplo = round(microtime(true) * 1000).'-COIPLO-'.$req->nm_id_mrs.'-'.$req->nm_historymrs.'-'.str_replace(' ','-',$req->file('nm_coiplo')->getClientOriginalName());
                        $req->file('nm_coiplo')->move(public_path('storage/'.$req->nm_id_mrs.'/coiplo'), $filenamecoiplo);
                        storage::delete('public/'.$req->nm_id_mrs.'/coiplo'.'/'.$req->nm_path_coiplo);
                    }         
                else
                    {
                        return redirect('/historymrs'.'/'.$id_mrs.'/forminputhistorymrs')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');  
                    }             
            }
        else
            {     
            $filenamecoiplo = $req->nm_path_coiplo;
            }
        //echo "berhasil";
        
     
        //bisa dipake session()->flash('sukses','Data Berhasil Di Submit');        
        //dipakereturn view('materialmrs/admintabelmaterialmrs',['data_id_mrs'=>$data_id_mrs,'data_material'=>$data_material]);
        //$id_mrs=$req->nm_id;

        //$data_historymrs=new historymr;
        $data_historymrs->idmrs=$req->nm_idmrs;
        $data_historymrs->id_mrs=$req->nm_id_mrs;
        $data_historymrs->id_historymrs=$req->nm_historymrs;
        $data_historymrs->project=$req->nm_project;
        $data_historymrs->tahun_project=$req->nm_tahun_project;
        $data_historymrs->spesifikasi=$req->nm_spesifikasi;
        $data_historymrs->jenis_meter=$req->nm_jenis_meter;
        $data_historymrs->stream=$req->nm_stream;
        $data_historymrs->qty_evc=$req->nm_qty_evc;
        $data_historymrs->qty_psv_prv=$req->nm_qty_psv_prv;
        $data_historymrs->qty_filter_pv=$req->nm_qty_filter_pv;        
        $data_historymrs->tanggal_sertifikasi=$req->nm_tanggal_sertifikasi;
        $data_historymrs->sertifikat_coiplo=$filenamecoiplo;
        $data_historymrs->update();
        
        return redirect('/historymrs'.'/'.$id_mrs.'/historymrs')->with('sukses','Data Berhasil Di Submit');
                
    }
    

}
