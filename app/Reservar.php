<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservar extends Model
{
	
  
	 protected $fillable = [
        'fecha', 'hora', 'cantidad' , 'recibir', 'comentario', 'reservar_id','deuda','cambio',
    ];
   public function usuario(){
    		return $this->belongsTo('App\User','user_id');
    	}
    public function alumno(){
            return $this->belongsTo('App\User');
        }

    public function material(){
    	return $this->belongsTo('App\Material','material_id');
    }

    public function materiale(){
        return $this->hasMany('App\Material','material_id');
    }

     public function Recibido(){
            return $this->hasMany('App\Recibir','reservar_id');
        
}

}
