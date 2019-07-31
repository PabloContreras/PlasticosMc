<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $fillable = [
    	'nombre', 'apellidos', 'email', 'telefono' ,'municipio', 'provincia', 'cp', 'area_interes', 'url_cv'
    ];
}
