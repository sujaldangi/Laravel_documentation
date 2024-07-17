<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('file-structure', function () {
    return view('file-structure');
}); 
Route::get('installation', function () {
    return view('installation');
}); 
Route::get('intro', function () {
    return view('intro');
}); 
Route::get('work-flow', function () {
    return view('work-flow');
}); 
Route::get('user',[user_controller::class,'show']);
Route::get('controller', function () {
    return view('controller');
});
Route::get('blade-template', function () {
    return view('blade-template');
});
Route::get('component', function () {
    return view('component');
});
