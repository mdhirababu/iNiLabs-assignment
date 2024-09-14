<?php

namespace App\Http\Controllers;

// use Dotenv\Validator;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderBy('created_at','DESC')->get();
        return view('employee.list',[
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $rules = $request->validate([
        //     'name' => 'require|min:20',
        //     'address' => 'require|min:30',
        //     'email' => 'require|min:30'
        // ]);

        // $validator = Validator::make($request->all(),$rules);
        // if($validator->fails()){
        //     return redirect()->route('employees.create')->withInput()->withErrors($validator);
        // }

        //insert employee info in database

        $employees = new Employee();
        $employees->name = $request->name;
        $employees->address = $request->address;
        $employees->email = $request->email;
        $employees->save();

        return redirect()->route('employee.index')->with('success','Employee Added Successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit',[
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        // $employees = new Employee();
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->save();

        return redirect()->route('employee.index')->with('success','Employee Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index')->with('success','Employee Deleted Successfully.');
    }
}
