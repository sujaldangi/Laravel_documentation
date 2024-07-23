<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view_controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LaravelMailSender;

/*
|-------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

// route grouping
// route prefix
// route naming
// image uploading
// controllers
Route::get('/', [view_controller::class, 'show'])->defaults('viewName', 'welcome');
Route::group(['prefix'=>'/laravel'],function (){
Route::get('file-structure', [view_controller::class, 'show'])->defaults('viewName', 'file-structure');
Route::get('installation', [view_controller::class, 'show'])->defaults('viewName', 'installation');
Route::get('intro', [view_controller::class, 'show'])->defaults('viewName', 'intro');
Route::get('work-flow', [view_controller::class, 'show'])->defaults('viewName', 'work-flow');
Route::get('controller', [view_controller::class, 'show'])->defaults('viewName', 'controller');
Route::get('blade-template', [view_controller::class, 'show'])->defaults('viewName', 'blade-template');
Route::get('component', [view_controller::class, 'show'])->defaults('viewName', 'component');
Route::get('CrudDoc', [view_controller::class, 'show'])->defaults('viewName', 'CrudDocumentation');
Route::get('mail',[LaravelMailSender::class,'send']);
});


// returns the home page with all Employee
Route::get('/crud', EmployeeController::class .'@index')->name('Employees.index');
// returns the form for adding a Employee
Route::get('/crud/create', EmployeeController::class . '@create')->name('Employees.create');
// adds a post to the database
Route::post('/crud', EmployeeController::class .'@store')->name('Employees.store');
// returns a page that shows a full Employee
Route::get('/crud/{post}', EmployeeController::class .'@show')->name('Employees.show');
// returns the form for editing a Employee
Route::get('/crud/{post}/edit', EmployeeController::class .'@edit')->name('Employees.edit');
// updates a Employee
Route::put('/crud/{post}', EmployeeController::class .'@update')->name('Employees.update');
// deletes a Employee
Route::delete('/crud/{post}', EmployeeController::class .'@destroy')->name('Employees.destroy');



