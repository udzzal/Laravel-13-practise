<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prefixroute_controller extends Controller
{
    //this is for prefix controller 

    function show(){
        return "Student list";
    }
    function add(){
        return "add student list";
    }
    function add_parameter($name){
    return "this is the {$name} parameter passed";
    }

}

