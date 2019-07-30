<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Auth;

class EmployeeController extends Controller
{
    public function home(){
    	$empleado = Auth::user();
    	return view('employee.home', compact('empleado'));
    }
    public function profile(){
    	$empleado = Auth::user();
    	return view('employee.profile', compact('empleado'));
    }
}
