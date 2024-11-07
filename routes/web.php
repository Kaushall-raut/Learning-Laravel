<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view("/home","home");

Route::get("/about/{name}",function($name){
  
    return view("about",["name"=>$name]);
});