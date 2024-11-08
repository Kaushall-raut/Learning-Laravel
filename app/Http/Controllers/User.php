<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class User extends Controller
{
    //
    function Username($name){
        return "hello world ".$name;
    }

    function Callingview(){
        return view('home');
    }
    function kaushal(){
        if(View::exists('admin.kaushal')){

            return view('admin.kaushal');
        }else{
            return "page not found";
        }
    }
}
