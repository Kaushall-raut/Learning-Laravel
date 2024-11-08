<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function Username($name){
        return "hello world ".$name;
    }

    function Callingview(){
        return view('home');
    }
}
