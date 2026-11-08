<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employe;

class Employee extends Controller
{
    //
    function display(){
        $emp= Employe::all();
        $emp= Employe::paginate(2);

        return view("employeelist",["employ"=>$emp]);

    }



    function show(){
        return view('From');
    }


    // function post(Request $req){
    //      $employ=new  Employe();

    //      $employ->name=$req->username;
    //      $employ->password=$req->password;
    //      $employ->phone=$req->phone;

    //      if($employ->save()){
    //         return "data has saved";
    //      }else{
    //         return "data not save";
    //      }


    // }
    function create(Request $req){
        // return $employee=Employe::create([
        //         "name" => $req->username,
        //         "password" => $req->password,
        //         "phone"=>$req->phone
        // ]);
        return Employe::create($req->all());


    }

    function update($id){

        $data=Employe::find($id);

        return view('updatedata',["emp"=>$data]);

    }

    function updatedb(Request $req, $id){

        Employe::find($id)->update(
                [
                    "name"=>$req->name,
                    "password"=>$req->password,
                    "phone"=>$req->phone ,
                ]
        );
        
        return redirect("/dtatbasedata");

    }


    function delete($id){
        Employe::find($id)->delete();

        return redirect("dtatbasedata");
    }

    function search(Request $req){
        $keyword= $req->query('search_name');
        $emp= Employe::where('name','like',"%{$keyword}%")->get();
         

        return view("employeelist",["employ"=>$emp]);


    }

}



