<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pingjia extends Model
{
     public function phone()
     {

     return $this->belongsTo('App\Phone');

     }
}
