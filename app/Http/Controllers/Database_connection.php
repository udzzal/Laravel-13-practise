<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Database_connection extends Controller
{
    //this is for connecting mysql

    function hdb(){

    DB::connection()->getPdo();

    $users=DB::select("select * from users");
        return $users;
    }

    function insert(){
        DB::connection()->getPdo();
        $users=DB::insert(
            
        "insert into users (name,email,phone) values (?,?,?)",
        ["tony","tony@gmail.com",123456]
        );

        if($users){
            return "User created successfull";
        }else{
            return "error user did not created";
        }
    }
    
    function update(){
        DB::connection()->getPdo();
        $users=DB::update(
            
        "update users set name?,email=?,phone=? where id=?",
        ["tonystark","tony-ironman@gmail.com",999456,3]
        );

        if($users){
            return "User updated successfull";
        }else{
            return "error user did not updated";
        }

        
    }
    function delete(){
          DB::connection()->getPdo();
        $users=DB::delete(
            
        "delete from users where id=?",
        [3]
        );

        if($users){
            return "User deleted successfull";
        }else{
            return "error user did not deleted";
        }

    }


}


