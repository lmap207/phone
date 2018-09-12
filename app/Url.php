<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
