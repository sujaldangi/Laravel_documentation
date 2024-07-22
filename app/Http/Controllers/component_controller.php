<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
     * Create a new controller instance.
     * @author  
     * @description 
     * @param    $users:string, one:interer
     * @return view
     
**/
class component_controller extends Controller
{
    //
    function show(){
        return view('component');
    }
}
