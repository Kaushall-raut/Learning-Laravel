<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
Route::get('/', function () {
    return view('welcome');
});
Route::view("/home","home");

Route::get("/about/{name}",function($name){
  
    return view("about",["name"=>$name]);
});
Route::get("/user/{name}",[User::class,'Username']);
Route::get("/homec",[User::class,'Callingview']);
Route::get("/admin",[User::class,'kaushal']);
