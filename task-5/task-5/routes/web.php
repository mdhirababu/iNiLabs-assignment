<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employees/create',[EmployeeController::class,'create'])->name('employees.create');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employees.edit');
Route::put('/employees/{employee}',[EmployeeController::class,'update'])->name('employees.update');
Route::delete('/employees/{employee}',[EmployeeController::class,'destroy'])->name('employees.destroy');

