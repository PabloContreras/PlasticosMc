<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //

	public function departamento(){
    	$this belongsTO('App\departamento');
    }
}
