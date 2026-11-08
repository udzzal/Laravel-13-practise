<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileupload extends Controller
{
    //file upload laravel 

    function upload(Request $data){

        //$path=$data->file('file')->store('public');
        $path=$data->file('file')->storeAs('public',"dummy1.png");
        $filenamearray=explode("/",$path);
        $filename=$filenamearray[1];
        return view('/display',['path'=>$filename]);   

    }
}



