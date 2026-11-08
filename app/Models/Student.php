<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    //table name define 
    // public $table="users";

    //hidden table colom
    // public $hidden=[
    //     "id","email"
    // ];

//visible table coloum
    // protected $visible=[
    //     "phone"
    // ];

    //showing colum is present or not 
    // protected $cast=[
    //     "name"=>"boolean"
    // ];

    public $timestamps=false;
    protected $fillable=['name','email','city'];

    
}



