<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	/*
	 * 地址
	 */
    public function urls()
    {
    	return $this->hasMany('App\Url');
    }
}
