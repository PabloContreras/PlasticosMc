<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmpleadosController extends Controller
{
    public function indexForAdmin(){
    	$empleados = Employee::all();
    	return view('admin.empleados.index', compact('empleados'));
    }

    public function createForAdmin(){
    	return view('admin.empleados.create');
    }

    public function storeForAdmin(Request $request){
    	$empleado = new Employee;
    	$empleado->name = $request->name;
    	$empleado->email = $request->email;
    	$empleado->password = bcrypt($request->password);
    	//return $empleado;
    	$empleado->save();
    	return redirect('/admin/empleados/');
    }
    public function showForadmin($id){
    	$empleado = Employee::find($id);
    	return view('admin.empleados.show', compact('empleado'));
    }

    public function editForAdmin($id){
    	$empleado = Employee::find($id);
    	return view('admin.empleados.edit', compact('empleado'));
    }

    public function updateForAdmin(Request $request, $id){
    	$empleado = Employee::find($id);
    	$empleado->name = $request->name;
    	$empleado->email = $request->email;
    	$empleado->password = bcrypt($request->password);
    	//return $empleado;
    	$empleado->save();
    	return redirect('/admin/empleados');
    }

    public function destroyForAdmin($id){
    	$empleado = Employee::find($id);
    	$empleado->delete();
    	return redirect('/admin/empleados');
    }
}
