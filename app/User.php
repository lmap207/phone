<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     
	
    public function urls()
    {
    	return $this->hasMany('App\Url');
    }

}
