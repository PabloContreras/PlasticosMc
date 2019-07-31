<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function servicios()
    {
        return view('procesos');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function buzon()
    {
        return view('buzon');
    }
}
