<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

//use Illuminate\View\View;

class Users extends Controller
{
    function name(){
     return "this is controller";
    }
    function adduser(){
     return "This is add user";
    }
    function details(string $name){
     return "this is details of ".$name." md";
    }
    function showui(){

        $ami='udzzal';
        $arr=['udzzal','aritro','sayel','sujon'];
        return view('user.user1',["data"=>$ami,'array'=>$arr]);
        //return view('user.user1',["data"=>$ami]);
        

        
    }
    function showui1(){
        return view('welcome');
    }
    
    function show2(){
        if(View::exists('welcome')){
        return "welcome view esist";
    }else{
        return "no view found";
        }
    }

    
}

//