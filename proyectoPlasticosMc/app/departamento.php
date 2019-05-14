<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    //

    public function admin(){
    	$this belongsTO('App\administrador');
    }

    public function empleado(){
    	$this-> hasMany('App\empleado');
    }

    public function jefe(){
    	$this->hasOne('App\jefe');
    }
}
