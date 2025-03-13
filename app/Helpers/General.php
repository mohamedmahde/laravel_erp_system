<?php
use Illuminate\Support\Facades\Config;


 function uploadImage($folder , $image){

    $extension=strtolower($image->extention());
    $filename = time() . rand(100, 999) . '.' . $extension;
    
    $image->move(public_path($folder), $filename);
    return $folder . $filename;

}


?>