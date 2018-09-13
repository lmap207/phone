<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     public function phone()
    {
        return $this->belongsTo('App\Phone');
    }
}
