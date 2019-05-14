<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    //
    public function editor(){
    	$this-> hasMany('App\editor');
    }

    public function departamento(){
    	$this -> hasMany('App\departamento');
    }
}
