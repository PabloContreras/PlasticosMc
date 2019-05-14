<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aviso-evento extends Model
{
    //

       public function editor(){
    	$this belongsTO('App\editor');
    }
}
