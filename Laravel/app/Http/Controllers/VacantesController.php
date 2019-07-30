<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacante;

class VacantesController extends Controller
{
    public function indexForAdmin(){
    	$vacantes = Vacante::all();
    	return view('admin.vacantes.index', compact('vacantes'));
    }
    public function createForAdmin(){
    	return view('admin.vacantes.create');
    }

    public function storeForAdmin(Request $request){
    	$vacante = new Vacante;
    	$vacante->empresa = $request->empresa;
    	$vacante->area = $request->area;
    	$vacante->puesto = $request->puesto;
    	$vacante->sueldo = $request->sueldo;
    	$vacante->descripcion = $request->descripcion;
    	$vacante->activo = $request->activo;
    	//return $vacante;
    	$vacante->save();
    	return redirect('/admin/vacantes/');
    }
    public function showForadmin($id){
    	$vacante = Vacante::find($id);
    	return view('admin.vacantes.show', compact('vacante'));
    }

    public function editForAdmin($id){
    	$vacante = Vacante::find($id);
        //return $vacante;
    	return view('admin.vacantes.edit', compact('vacante'));
    }

    public function updateForAdmin(Request $request, $id){
    	$vacante = Vacante::find($id);
    	$vacante->empresa = $request->empresa;
        $vacante->area = $request->area;
        $vacante->puesto = $request->puesto;
        $vacante->sueldo = $request->sueldo;
        $vacante->descripcion = $request->descripcion;
        $vacante->activo = $request->activo;
    	$vacante->save();
    	return redirect('/admin/vacantes');
    }

    public function destroyForAdmin($id){
    	$vacante = Vacante::find($id);
    	$vacante->delete();
    	return redirect('/admin/vacantes');
    }
}
