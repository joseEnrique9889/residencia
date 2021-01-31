<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class Regresado extends Model
{
    protected $table ="reservars";

    protected static function booted(){

    	static::addGlobalScope('reservas',function (Builder $builder){
    		$builder->whereNull('reservas');
    	});
}
