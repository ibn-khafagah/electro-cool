<?php

namespace App\Traits;


trait ImageTraits
{
    public function uploadImage($var,$folder,$request,$name)
    {

        if ($request->hasfile($name)) {
            $oldImage = $var->$name;
            $file = $request->$name;
            $filename = time() . $file->getClientOriginalname();
            $path = 'upload/' . $folder;
            $file->move('upload/'.$folder, $filename);
            $var->$name = $filename;
            if (!empty($oldImage) && file_exists(public_path($path . '/' . $oldImage))) {
                unlink(public_path($path . '/' . $oldImage));
            }
        }

    }


    public function multipleImage($var,$folder,$request,$name,$model,$colum)
    {
        $all    =   $request->all();
        $images =   $all[$name];
        foreach ($images as $key=>$value){
            $image  =   new $model();
            if ($request->hasfile($name)) {
                $file = $value;
                $filename = time() . $file->getClientOriginalname();
                $file->move('upload/'.$folder, $filename);
                $image->$name = $filename;
            }
            $image->$colum  =   $var->id;
            $image->save();
        }
    }
}
