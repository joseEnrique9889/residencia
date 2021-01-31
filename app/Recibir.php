<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibir extends Model
{
     public function Recibido(){
            return $this->belongsTo('App\Reservar');
        }
}
