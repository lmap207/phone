<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     return $this->hasMany('App\Yjfk'); 
	
    public function urls()
    {
    	return $this->hasMany('App\Url');
    }

}
