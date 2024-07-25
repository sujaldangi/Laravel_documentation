<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view_controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LaravelMailSender;
use App\Http\Controllers\uploadFile;
use App\Models\Employee;
use App\Models\attachment;

use Illuminate\Http\Request;
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

// route grouping//
// route prefix//
// route naming
// image uploading
// controllers

// initial route

// Route grouping with prefix "laravel" returns view for sidemenu links 
Route::group(['prefix' => '/laravel'], function () {
    Route::get('', [view_controller::class, 'show'])->defaults('viewName', 'welcome')->name('home');
    Route::get('file-structure', [view_controller::class, 'show'])->defaults('viewName', 'file-structure')->name('file-structure');
    Route::get('installation', [view_controller::class, 'show'])->defaults('viewName', 'installation')->name('installation');
    Route::get('intro', [view_controller::class, 'show'])->defaults('viewName', 'intro')->name('intro');
    Route::get('work-flow', [view_controller::class, 'show'])->defaults('viewName', 'work-flow')->name('work-flow');
    Route::get('controller', [view_controller::class, 'show'])->defaults('viewName', 'controller')->name('controller');
    Route::get('blade-template', [view_controller::class, 'show'])->defaults('viewName', 'blade-template')->name('blade-template');
    Route::get('component', [view_controller::class, 'show'])->defaults('viewName', 'component')->name('component');
    Route::get('crud-documentation', [view_controller::class, 'show'])->defaults('viewName', 'crud-documentation')->name('crud-documentation');
    Route::get('mail/{to}', [LaravelMailSender::class, 'send']);
});
Route::view('upload','upload');
Route::post('upload',[uploadFile::class,'index']);

// returns the home page with all Employee
Route::get('/crud', [EmployeeController::class, 'index'])->name('Employees.index');

// returns the form for adding or editing an Employee
// Route::get('/crud/form/{employee?}', [EmployeeController::class, 'form'])->name('Employees.form');

// adds a post to the database
Route::post('/crud', [EmployeeController::class, 'store'])->name('Employees.store');

// updates an Employee
Route::put('/crud/{employee}', [EmployeeController::class, 'update'])->name('Employees.update');

// deletes an Employee
Route::delete('/crud/{employee}', [EmployeeController::class, 'destroy'])->name('Employees.destroy');

Route::get('/crud/form/{employee?}',function(Request $request){
    $request->validate([
        'name' => 'required|max:255',
        'mail' => 'required|email|unique:employees,mail',
        'age' => 'required|integer',
        'role' => 'required|max:255',
        'salary' => 'required|numeric',
        'image_id' => 'required|image|mimes:jpg,png,jpeg,gif',
      ]);
      if ($request->hasFile('image_id')) {
        $imagePath = $request->file('image_id')->store('user-images', 'public'); // Store file and get path
      } else {
        $imagePath = null;
      }
      $employeeData = $request->all();

      attachment::updateOrCreate(
        ['storage_path'=>'local','image_path'=>$imagePath]
    );
    
    Employee::updateOrCreate(
        ['name' => $employeeData['name'],'mail'=>$employeeData['mail'],'age' => $employeeData['age'],'role'=>$employeeData['role'],'salary'=>$employeeData['salary'],'image_id'=>'']
    );
});
