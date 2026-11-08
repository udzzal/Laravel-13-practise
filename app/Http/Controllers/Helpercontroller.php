<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helpercontroller extends Controller
{
    //

    function index(Request $req){

        //dd($req);
        //dump($req);
        //from this helper function we can get any value from env
        //echo env('APP_NAME');

        //for url get we use 
        //echo url('helper');
        //for configaration 
        echo config('app.locale');
        //database config
        //return config('database.connections.sqlite);
        //return config('database.connections');

        //custom helper function call
        echo formatPrice(5000); 
        //return $req;
    }
}


