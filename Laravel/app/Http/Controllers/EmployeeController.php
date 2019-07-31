<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Auth;
use App\Publicaciones;

class EmployeeController extends Controller
{
    public function home(){
    	$empleado = Auth::user();
    	$publicaciones = Publicaciones::all();
    	return view('employee.home', compact('empleado', 'publicaciones'));
    }
    public function profile(){
    	$empleado = Auth::user();
    	return view('employee.profile', compact('empleado'));
    }
   
}
