<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    //

    use HasFactory;

    public $timestamps=false;
    public $fillable=[
        "name","phone","password"
    ];

    function getNameAttribute($val){
        return ucfirst($val);
    }
    function getPhoneAttribute($val){
        return "+88".$val;
    }
    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }
    function setphoneAttribute($val){
        $this->attributes['phone']="+88".$val;
    }


    function employeImg(){
        return $this->hasOne('App\Models\Image','id');
    }
}





