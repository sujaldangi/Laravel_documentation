<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome_controller extends Controller
{
    //
    function show(){
        return view('welcome');
    }
}
