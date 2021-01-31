<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class PerfilController extends Controller
{
     public function edit()
    {
      $perfil = User::find(Auth::User()->id);

       return view('alumno.perfil')->with('perfil', $perfil);
        
    }

     public function update(Request $request){
       $perfil = User::find(Auth::User()->id);
       $perfil->fill($request->all());
       $perfil->save();
       
       return redirect('alumno');
    }

}
