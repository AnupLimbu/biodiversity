<?php
namespace App\Http\Trait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

trait fileUpload{

    function upload(Request $request, $file_type,$file_name, $store_path, $dimensions=[]){
        $file_path= "";
        if ($file_type==='image' && $request->file($file_name)){
            $image = $request->file($file_name);
            $imageName =  time().'_'.implode("_",explode(" ",$request->file($file_name)->getClientOriginalName()));
            $store_folder='images';
            $file_path=asset('/storage/'.$store_path)."/".$imageName;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($store_folder, $imageName, 'public');
        }
    return $file_path;
    }

    function update($model,Request $request, $file_type,$file_name, $store_path, $dimensions=[]){
        $file_path= "";
        if ($file_type==='image' && $request->file($file_name)){
            $image = $request->file($file_name);
            $imageName =  time().'_'.implode("_",explode(" ",$request->file($file_name)->getClientOriginalName()));
            $store_folder='images';
            $file_path=asset('/storage/'.$store_path)."/".$imageName;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($store_folder, $imageName, 'public');
        }
        return $file_path;
    }




}
