<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcome_controller;
use App\Http\Controllers\file_structure_controller;
use App\Http\Controllers\installation_controller;
use App\Http\Controllers\intro_controller;
use App\Http\Controllers\workflow_controller;
use App\Http\Controllers\controller_controller;
use App\Http\Controllers\blade_template_controller;
use App\Http\Controllers\component_controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\crud_doc;

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
// Route::get('/', function () {
//     return view('welcome');
// });


// controllers
Route::get('/',[welcome_controller::class,'show']);
Route::get('file-structure',[file_structure_controller::class,'show']);
Route::get('installation',[installation_controller::class,'show']);
Route::get('intro',[intro_controller::class,'show']);
Route::get('work-flow',[workflow_controller::class,'show']);
Route::get('controller',[controller_controller::class,'show']);
Route::get('blade-template',[blade_template_controller::class,'show']);
Route::get('component',[component_controller::class,'show']);
Route::get('CrudDoc',[crud_doc::class,'show']);



// returns the home page with all posts
Route::get('/crud', EmployeeController::class .'@index')->name('Employees.index');
// returns the form for adding a post
Route::get('/crud/create', EmployeeController::class . '@create')->name('Employees.create');
// adds a post to the database
Route::post('/crud', EmployeeController::class .'@store')->name('Employees.store');
// returns a page that shows a full post
Route::get('/crud/{post}', EmployeeController::class .'@show')->name('Employees.show');
// returns the form for editing a post
Route::get('/crud/{post}/edit', EmployeeController::class .'@edit')->name('Employees.edit');
// updates a post
Route::put('/crud/{post}', EmployeeController::class .'@update')->name('Employees.update');
// deletes a post
Route::delete('/crud/{post}', EmployeeController::class .'@destroy')->name('Employees.destroy');



