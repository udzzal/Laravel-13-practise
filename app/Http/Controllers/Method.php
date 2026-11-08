<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Method extends Controller
{
    //

    function show(){
        return view('showmethod');
    }
    function post(){
        return  view('formuser');
    }
     function put(){
        return  view('formuser');
    }
     function delete(){
        return  view('formuser');
    }
     function patch(){
        return  view('formuser');
    }
}
