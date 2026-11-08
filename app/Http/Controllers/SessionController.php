<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //session controller 
    function show(){

        return view("sessionview");
    }
    function post(Request $req){

        $req->session()->put('userinfo',$req->input());

        // echo session('userinfo.username');


        // echo '<pre>';
        // print_r(session('userinfo'));
        // echo '</pre>';

        return redirect('/showsession');
    }
}


