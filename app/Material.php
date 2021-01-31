<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	protected $fillable = [
         'cantidad','Bueno','reservado','cambio','nombre','descripcion','codigo','vida','imagen','estado','parent_id',
    ];
    public function reservas(){
            return $this->hasMany('App\Reservar','material_id');
        }
    public function descrip(){
    	return $this->belongsTo('App\Material');
    }

    public function reserva(){
    	return $this->hasMany('App\Reservar','material_id');
    }

    public function material(){
    	return $this->hasMany('App\Material','parent_id');
    }
}
