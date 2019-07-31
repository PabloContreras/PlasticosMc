<?php

namespace App\Http\Controllers;

use App\Curriculo;
use App\Mail\CurriculoMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReclutamientoController extends Controller
{
    public function formReclutamiento(Request $r)
    {
    	$url_cv = $this->guardarCV($r);
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
        $curriculo->save();

        Mail::to('bronkbsgck@gmail.com')->send(new CurriculoMail($curriculo));


        return back()->with([
            'guardado' => 'Hemos recibido tu información, pronto nos pondremos en contacto contigo.'
        ]);
    }

    private function guardarCV(Request $r){
    	$file = $r->file('cv');
        return $r->file('cv')->store('public');
    }

    public function getViewCurriculos()
    {
        $curriculos = Curriculo::all();
        return view('admin.curriculosList', compact('curriculos'));
    }
}
