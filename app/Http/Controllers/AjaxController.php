<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;

class AjaxController extends Controller
{
   public function updateAsistencia(Request $request, $id)
    {

        $valores = $request->all();
        $registro = Asistencia::find($id);
        if(is_null($registro))  response()->json( ["error"=>"Registro no encontrado"] ,404);
        $registro->fill($valores);
        $registro->save();
        return response()->json($registro->toArray(),200);
    }
}
