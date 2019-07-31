<?php

namespace App\Http\Controllers;

use App\Curriculo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReclutamientoController extends Controller
{
    public function formReclutamiento(Request $r)
    {
    	$url_cv = $this->guardarCV($r);
    	return $url_cv;

    	$curriculo = new Curriculo([
    		'nombre' => $r->nombre,
    		'apellidos' => $r->apellidos,
    		'email' => $r->email,
    		'telefono' => $r->telefono,
    		'municipio' => $r->municipio,
    		'provincia' => $r->provincia,
    		'cp' => $r->cp,
    		'area_interes' => $r->area_interes,
    		'url_cv' => $url_cv
    	]);
    }

    private function guardarCV(Request $r){
    	$file = $r->file('cv');
    	$nom_u = str_replace(' ', '_', $r->nombre);

    	$nombre = $nom_u . '_' . Carbon::now()->timestamp ;

    	\Storage::disk('local')->put($nombre, \File::get($file));
    	return "Guardado";
    }
}
