<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mr;
use App\Models\materialmr;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Validation\ValidatesRequests;

class MaterialMRSController extends Controller
{
    use ValidatesRequests;
    //index mrs
    public function IndexMaterialMrs($id)
    {              
        $data_id_mrs= mr::find($id);
        //dd($data_id_mrs);
        $id_mrs_material = $data_id_mrs->id_mrs;
       $data_material_mrs= materialmr::where('id_mrs', 'like',"%$id_mrs_material%")->get();        
       //dd($data_material);
        return view('materialmrs/admintabelmaterialmrs',['data_id_mrs'=>$data_id_mrs,'data_material_mrs'=>$data_material_mrs]);        
    }

    //input data material mrs
    public function FormInputMaterialMrs($id)
    {      
        $data_id_mrs= mr::find($id);
        //$id_mrs_material = $data_id_mrs->id_mrs;
        //$id_mrs_material = $data_id_mrs->id_mrs;
        return view('materialmrs/admintabelinputmaterialmrs',['data_id_mrs'=>$data_id_mrs]);
        
    }
    public function CreateMaterialMrs(Request $req)
    {   
        $id_mrs=$req->nm_idmrs;
        if ($req->hasfile('nm_sertifikat')) 
        {   
            $id_mrs=$req->nm_idmrs;
            $file = $req->file('nm_sertifikat');
            $fileext=$file->getClientOriginalExtension();
            $filesize=$file->getSize();

            if($fileext=='pdf' and $filesize<=26000000)
                {
                    $filenamematerialmrs = round(microtime(true) * 1000).'-'.$req->nm_id_mrs.'-'.$req->nm_description.str_replace(' ','-',$req->file('nm_sertifikat')->getClientOriginalName());
                    //untuk nama folder
                    $folder_id_mrs=$req->nm_id_mrs;
                    //echo $folder_id_mrs;
                    $req->file('nm_sertifikat')->move(public_path('storage/'.$req->nm_id_mrs.'/sertifikat'), $filenamematerialmrs);
                }         
            else
                {
                    //echo "salah";
                    //bisa dipake  session()->flash('gagal', 'Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');
                    //bisa dipake return view('materialmrs/admintabelinputmaterialmrs',['data_id_mrs'=>$data_id_mrs]);
                    return redirect('/materialmrs/'.$id_mrs.'/forminputmaterialmrs')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');
                }             
        }
        else
        {            
            //echo "kosong";
            $filenamematerialmrs = "";
        }
        //echo "berhasil";
        $data_materialmrs= new materialmr;
        $data_materialmrs->idmrs=$req->nm_idmrs;
        $data_materialmrs->id_mrs=$req->nm_id_mrs;
        $data_materialmrs->serial_number=$req->nm_serial_number;
        $data_materialmrs->description	=$req->nm_description;
        $data_materialmrs->merk=$req->nm_merk;
        $data_materialmrs->size=$req->nm_size;
        $data_materialmrs->qty=$req->nm_qty;
        $data_materialmrs->remark=$req->nm_remark;
        $data_materialmrs->sertifikat=$filenamematerialmrs;
        $data_materialmrs->save();
     
        //bisa dipake session()->flash('sukses','Data Berhasil Di Submit');        
        //dipakereturn view('materialmrs/admintabelmaterialmrs',['data_id_mrs'=>$data_id_mrs,'data_material'=>$data_material]);
        //$id_mrs=$req->nm_id;
        
        return redirect('/materialmrs/'.$id_mrs.'/materialmrs')->with('sukses','Data Berhasil Di Submit');
                
    }
    //Delete Material mrs
    public function DeleteMaterialMrs($id)
    {                
        $data_id_materialmrs= materialmr::find($id);
        $id_mrs=$data_id_materialmrs->idmrs;
        storage::delete('public/'.$data_id_materialmrs->id_mrs.'/sertifikat'.'/'.$data_id_materialmrs->sertifikat);
        $data_id_materialmrs->delete();
        return redirect('/materialmrs/'.$id_mrs.'/materialmrs')->with('sukses','Data Berhasil Di Hapus'); 
    }

    //edit material mrs
    public function ShowMaterialMrs($id)
    {       
        //echo $id; 
        $data_id_materialmrs= materialmr::find($id);
        //dd($data_id);
        return view('materialmrs/admintabeleditmaterialmrs',['data_id_materialmrs'=>$data_id_materialmrs]);
    }

    public function UpdateMaterialMrs(Request $req)
    {         
        $id_mrs=$req->nm_idmrs;
        $data_materialmrs=materialmr::find($req->nm_id_material);

        if ($req->hasfile('nm_sertifikat')) 
        {   
            $file = $req->file('nm_sertifikat');
            $fileext=$file->getClientOriginalExtension();
            $filesize=$file->getSize();

            if($fileext=='pdf' and $filesize<=26000000)
                {
                    
                    $filenamematerialmrs = round(microtime(true) * 1000).'-'.$req->nm_id_mrs.'-'.$req->nm_description.str_replace(' ','-',$req->file('nm_sertifikat')->getClientOriginalName());
                    //untuk nama folder
                    $folder_id_mrs=$req->nm_id_mrs;
                    //echo $folder_id_mrs;
                    $req->file('nm_sertifikat')->move(public_path('storage/'.$req->nm_id_mrs.'/sertifikat'), $filenamematerialmrs);
                        
                    //$req->file('nm_sertifikat')->move(public_path('storage/sertifikat/'.$folder_id_mrs), $filenamematerialmrs);
                    storage::delete('public/'.$req->nm_id_mrs.'/sertifikat'.'/'.$req->nm_path_sertifikat);
                    
                }         
            else
                {
                    return redirect('/materialmrs/'.$id_mrs.'/forminputmaterialmrs')->with('gagal','Gagal upload file, Jenis file hanya PDF dengan ukuran kurang dari 25 MB');
                }             
        }
        else
        {            
            //echo "kosong";
            $filenamematerialmrs = $req->nm_path_sertifikat;
        }
        //echo "berhasil";
        //$data_materialmrs= new materialmr;
        //$data_materialmrs->idmrs=$req->nm_id;
        //$data_materialmrs->id_mrs=$req->nm_id_mrs;
        $data_materialmrs->serial_number=$req->nm_serial_number;
        $data_materialmrs->description	=$req->nm_description;
        $data_materialmrs->merk=$req->nm_merk;
        $data_materialmrs->size=$req->nm_size;
        $data_materialmrs->qty=$req->nm_qty;
        $data_materialmrs->remark=$req->nm_remark;
        $data_materialmrs->sertifikat=$filenamematerialmrs;
        $data_materialmrs->update();

        return redirect('/materialmrs/'.$id_mrs.'/materialmrs')->with('sukses','Data Berhasil Di Update');
    }

}
