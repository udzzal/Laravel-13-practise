<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\nospace;
use App\Rules\uppercase;

class From_controller extends Controller
{
    //
    function adduser(Request $request){

    $request->validate([
        //for custom error message message are on uppercase class
        "username"=>["required",new nospace(),new uppercase()],
    

        "email"=>"required | email",
        "phone"=>"required  | min:3 |digits_between:3,25 |numeric"

        ]);
        return $request->all();
        //
        //return $request->input('email');
        //$selectedfile=$request->only(['email','phone']);
        //$selectedfile=$request->except(['email','phone']);
        //return $request->has('email');

        

    }
}


