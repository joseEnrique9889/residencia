<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function __construct(){
   		$this->middleware('auth');
   		$this->middleware('isdmin');

   }
   public function getDashboard(){

   	$users = DB::table('users')->count();
          $reservas = DB::table('reservars')->count();
          $materiales = DB::table('materials')->count();
          //$recibido = DB::select('SELECT count(*) as cuantos from reservars where recibir = "Regresado"')[0]->cuantos;
          return view('admin.dashboard', compact('users','reservas','materiales'));
   }
}
