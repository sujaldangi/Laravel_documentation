<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blade_template_controller extends Controller
{
    //
    function show(){
        return view('blade-template');
    }
}
