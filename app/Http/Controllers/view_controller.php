<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_controller extends Controller
{
    //
    public function show($viewName)
    {
        // Validate that the view exists
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }
}
