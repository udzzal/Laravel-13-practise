<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class relationship extends Controller
{
    //

    function one_to_one(){



        return Employe::find(2)->employeImg;
        //return "one to one relation";
    }
}

