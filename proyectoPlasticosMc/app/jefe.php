<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jefe extends Model
{
    //

    
    public function departamento(){
    	$this ->hasOne('App\departamento');
    }
}
