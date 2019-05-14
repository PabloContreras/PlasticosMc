<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{

	public function editor(){
    	$this belongsTO('App\editor');
    }
    //
}
