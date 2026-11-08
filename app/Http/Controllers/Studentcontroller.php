<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Http;

class Studentcontroller extends Controller
{
    function show(){
    //new woek http clint
    $data=Http::get("https://jsonplaceholder.typicode.com/posts");
    $data=$data->body();

    //passing into view
    $result=Student::all();
    return view('data_view',["data"=>$result,'jsondata'=>json_decode($data)]);

    //delete 

    // $result=Student::where('id',2)->delete();
    // if($result){
    //     return  Student::all();
    // }

    // return Student::create([
    //         "name"=>"sid",
    //         "email"=>"sid@gmail.com",
    //         "city"=>"dhaka"
    // ]);

    
        // return Student::where('id',2)->update([
        //     "name"=>"sayel sohan"
        // ]);

        //return Student::find(2);
        //return Student::all();
       // return "this is show of orm database";
    }

}
