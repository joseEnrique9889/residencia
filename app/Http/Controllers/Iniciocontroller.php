<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function tablero(){
          $users = DB::table('users')->count();
          $reservas = DB::table('reservars')->count();
          $recibido = DB::select('SELECT count(*) as cuantos from materials where recibido = "Regresado"')[0]->cuantos;
          $materiales = DB::table('materials')->count();
          $productos =DB::table('productos')->count();
          return view('supervisor.dashboard', compact('users','reservas','materiales','productos'));
}
