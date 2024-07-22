<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
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
      'id' => 'required',
      'name' => 'required|max:255',
      'age' => 'required|max:255',
      'gender' => 'required|max:255',
      'role' => 'required|max:255',
      'salary' => 'required',
    ]);
    Employee::create($request->all());
    return redirect()->route('Employees.index')->with('success', 'Employee created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'id' => 'required',
      'name' => 'required|max:255',
      'age' => 'required|max:255',
      'gender' => 'required|max:255',
      'role' => 'required|max:255',
      'salary' => 'required',
    ]);
    $Employees = Employee::find($id);
    $Employees->update($request->all());
    return redirect()->route('Employees.index')
      ->with('success', 'Employee updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $Employees = Employee::find($id);
    $Employees->delete();
    return redirect()->route('Employees.index')
      ->with('success', 'Employee deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
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
   * Show the form for editing the specified post.
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