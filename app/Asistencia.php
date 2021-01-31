<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Asistencia extends Model
{
	 protected $fillable = [
        'fecha', 'hora', 'grupo','user_id','rol'
    ];

     public function usuario(){
    	return $this->belongsTo('App\User' , 'user_id');
    }

   public function persona()
{
    return $this->hasmany('App\User','user_id');
}

}
