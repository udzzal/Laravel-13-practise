<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;





Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/welcome', function () {
    return view('welcome');
});

//simple form has limition
//Route::view('/welcome','welcome');

Route ::get("/about",function (){
    return view("about");
});

//for danamic routing 
// Route ::get("/about/{name}",function ($name){
//     return $name;
// });

//sending to view
Route ::get("/about/{name}",function ($name){
    return view("about",["name" =>$name]);
});


Route::get("contact",function(){
    return "<h1>this is contact page</h1>";
});


//re routing 
Route ::redirect("/login",'/');

//using controller with router

Route::get('/userdetails',[Users::class,'adduser']);

Route::get('/userdetails-name',[Users::class,'name']);

Route::get('/userdetails/{name}',[Users::class,'details']);
//
//connecting view in controller

Route::get("/user-ui1",[Users::class,'showui1']);
Route::get("/user-ui",[Users::class,'showui']);
Route::get("/user-ui2",[Users::class,'show2']);
//
//
//

//sub view 

Route::get("/subview",function(){
    return view('common.inner');
});


Route::view("/home",'layouts.home');


//route for form


//nessary import
use App\Http\Controllers\From_controller;

Route::view("/form","form.adduser");
Route::post("/form", [From_controller::class,"adduser"]);


//file upload 
use App\Http\Controllers\fileupload;

Route::view("/file","file.file");
Route::post("/file",[fileupload::class,'upload']);



Route::view("url",'url');

//prefix route 

use App\Http\Controllers\prefixroute_controller;

// Route::view('prefix_route','prefix_route');
// Route::get("student/show",[prefixroute_controller::class,'show']);
// Route::get("student/add",[prefixroute_controller::class,'add']);

Route::prefix('student')->group(function(){
    Route::view("/home",'welcome');
    Route::get('/show',[prefixroute_controller::class,'show']);
    Route::get("/add",[prefixroute_controller::class,"add"]);
});


//here we are using the smae class name multiple time 

//else we can use group controller 

Route::controller(prefixroute_controller::class)->group(function(){
    Route::view("/home/",'welcome');
    Route::get('add','add');
    Route::get('show','show');
    //passing parameter 
    Route::get('add/{name}','add_parameter');

});


//middele ware start here 

//there are three type of middeleware in laravel

//   1:Global -> use in hole application
//   2:Route middelware -> use only in  route
//   3:Group middeleware -> used in grouping 

Route::view('/middeleware','middleware');
//group calling middleware
Route::view('/middeleware','middleware')->middleware('group_middleware');


//middleware group made multiple route 

Route::middleware('group_middleware')->group(function(){


        Route::view('/middeleware','middleware');
        Route::view('/about','middleware');
        Route::view('/home','middleware');


});




// middelware appling directly on route 

 //for this we dont need to assin in bostrap app.php
 //just directly import in route and use it

 use App\Http\Middleware\Acess;

//Route::view("\middelware","middleware")->middleware(Acess::class);
//Route::view("\middelware","middleware")->middleware([Acess::class,Acess::class]);
//meddeleware end here


//helper section
use  App\Http\Controllers\Helpercontroller;

Route::view('helper','helper');
Route::post('/helper',[Helpercontroller::class,'index']);


use App\Http\Controllers\Database_connection; 


Route::get('/db',[Database_connection::class,'hdb']);
Route::get("/save",[Database_connection::class,'insert']);

Route::get("/update",[Database_connection::class,'update']);
Route::get("/delete",[Database_connection::class,'delete']);

//using orm
use App\Http\Controllers\Studentcontroller;

Route::get('/student',[Studentcontroller::class,'show']);


//route for get put patch delete

use App\Http\Controllers\Method;



Route::delete("/formuser",[Method::class,'delete']);
//Route::put("/formuser",[Method::class,'put']);
//Route::patch("/formuser",[Method::class,'patch']);
//Route::post("/formuser",[Method::class,'post']);
Route::get('/method',[Method::class,'show']);


// session in laravel 

use  App\Http\Controllers\SessionController;
Route::get("/sesion",[SessionController::class,'show']);
Route::post("/sesion",[SessionController::class,'post']);

Route::get("/showsession",function(){
    return view('showsession');
});



use App\Http\Controllers\LocalizationController;

Route::get("/localization",[LocalizationController::class,'show']);

// fromdta submit on database
use App\Http\Controllers\Employee;

Route::get("/submitfrom",[Employee::class,'show']);
//Route::post("/submitfrom",[Employee::class,'post']);
Route::post("/submitfrom",[Employee::class,'create']);

//show data of database

Route::get("/dtatbasedata",[Employee::class,'display']);

//delete 
Route::get("/delete/{id}",[Employee::class,'delete']);
Route::get("/update/{id}",[Employee::class,'update']);
Route::post("/update/{id}",[Employee::class,'updatedb']);

Route::get("search_employee",[Employee::class,'search']);


// display image from database
use App\Http\Controllers\UploadimgController;

Route::view("/imgform","imgfrom");
Route::post("/uploadedimg",[UploadimgController::class,"upload"]);


Route::get("/imgshow",[UploadimgController::class,"imgshow"]);


//use accessor

//show employee date 

use App\Http\Controllers\Employedateset;

Route::get("/employeedataview",[Employedateset::class,"showdata"]);

Route::get("/employeedatasave",[Employedateset::class,"save"]);

// 
use App\Http\Controllers\relationship;

Route::get("/one-to-one-relation",[relationship::class,"one_to_one"]);

