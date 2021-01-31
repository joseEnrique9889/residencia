<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','a_Paterno','a_Materno','Cuatri', 'email', 'control' , 'password','adeudo', 'password_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personas(){
            return $this->hasMany('App\Asistencia','asistencia_id');
        }

    public function Reservas(){
            return $this->hasMany('App\Reservar','user_id');
        }
        

     public function Asistencia(){
            return $this->hasMany('App\Asistencia','user_id');
        }

    public function scopeNombres($query, $name) {
        if ($name) {
            return $query->where('name','like',"%$name%");
        }
    }
     public function scopeApellidos($query, $a_Paterno) {
        if ($a_Paterno) {
            return $query->where('a_Paterno','like',"%$a_Paterno%");
        }
    }


        
}
