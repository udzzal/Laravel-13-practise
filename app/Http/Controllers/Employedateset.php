<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class Employedateset extends Controller
{
    //
    function showdata(){
        return Employe::all();
    }

    function save(){
        $data=Employe::create([
            'name'=>'udzal  ahammed',
            "password"=>"21555446",
            'phone'=>"014545900"
        ]);
        if($data){
            return $data;
        }
    }
}




