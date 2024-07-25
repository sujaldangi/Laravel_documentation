<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\attachment;

use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $Employees = Employee::all();
    return view('Employees.index', compact('Employees'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
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
    $attachment_data = ['storage_path'=>'local','image_path'=>$imagePath];
    $attachmentCreated = attachment::create($attachment_data);
    $employeeData['image_id'] = $attachmentCreated->id;
    $employeeCreated = Employee::create($employeeData);
    // if ($employeeCreated) {
    //   $this->sendCustomEmail("sujalinfostride@gmail.com", $request->mail, $request->name);
    //   $this->sendCustomEmail($request->mail, $request->mail, $request->name);
    // }

    return redirect()->route('Employees.index')->with('success', 'Employee created successfully.');
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function update(Request $request, Employee $employee)
  {
    $request->validate([
      'name' => 'required|max:255',
      'mail' => ['required', 'email', Rule::unique('employees', 'mail')->ignore($employee->id)],
      'age' => 'required|integer',
      'role' => 'required|max:255',
      'salary' => 'required|numeric',
      'image_id' => 'image|mimes:jpg,png,jpeg,gif',
    ]);
    $employee_data=$request->all();
    if ($request->hasFile('image_id')) {
      
      $imagePath = $request->file('image_id')->store('user-images', 'public');
      $attachment_data = ['storage_path'=>'local','image_path'=>$imagePath];
      $attachmentCreated = attachment::create($attachment_data);

      $employee_data['image_id'] =$attachmentCreated->id;
    }

    $employee->update($employee_data);
    return redirect()->route('Employees.index')->with('success', 'Employee updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function destroy(Employee $employee)
  {
    $employee->delete();
    return redirect()->route('Employees.index')->with('success', 'Employee deleted successfully');
  }
  public function form(Employee $employee = null)
  {
    return view('Employees.form', compact('employee'));
  }
  // routes functions
  /**
   * Show the form for creating a new Employee.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Employees.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $Employees = Employee::find($id);
    return view('Employees.show', compact('Employees'));
  }
  /**
   * Show the form for editing the specified Employee.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $Employees = Employee::find($id);
    return view('Employees.edit', compact('Employees'));
  }
}
