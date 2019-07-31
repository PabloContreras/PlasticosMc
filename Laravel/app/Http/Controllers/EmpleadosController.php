<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Publicaciones;
use Auth;

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
        $empleado->empresa = $request->empresa;
        $empleado->area =   $request->area;
        $empleado->puesto_real = $request->puesto_real;
        $empleado->puesto_intranet = $request->puesto_intranet;

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

    public function avisos(){
        $tipo = 'avisos';
        $empleado = Auth::user();
        $publicaciones = Publicaciones::where('tipo_publicacion', 'aviso')->get();
        //return $publicaciones;
        return view('employee.publicaciones', compact('empleado', 'publicaciones', 'tipo'));
    }
    public function eventos(){
        $tipo = 'eventos';
        $empleado = Auth::user();
        $publicaciones = Publicaciones::where('tipo_publicacion', 'evento')->get();
        //return $publicaciones;
        return view('employee.publicaciones', compact('empleado', 'publicaciones', 'tipo'));
    }
    public function documentos(){
        $tipo = 'documentos';
        $empleado = Auth::user();
        $publicaciones = Publicaciones::where('tipo_publicacion', 'documento')->get();
        //return $publicaciones;
        return view('employee.publicaciones', compact('empleado', 'publicaciones', 'tipo'));
    }
    public function show($id){
        $publicacion = Publicaciones::find($id);
        return view('employee.show', compact('publicacion'));
    }
}
