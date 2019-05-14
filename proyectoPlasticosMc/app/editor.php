<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editor extends Model
{
    //

	public function documento(){
		$this hasMany('App\documento');
	}

    public function admin(){
    	$this belongsTO('App\administrador');
    }

    public function avisoEvento(){
    	$this hasMany('App\aviso-evento');
    }
}
