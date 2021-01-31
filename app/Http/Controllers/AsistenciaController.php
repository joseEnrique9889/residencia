<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Asistencia;
use App\User;

class AsistenciaController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
      $this->middleware('isdmin');
    }
    
    public function index()
    {
        $asistencias=Asistencia::orderBy('id','Asc')->paginate(10);

      return view('admin.users.asistencia',compact('asistencias'));
    }

    public function Asistencia(Request $request){

      $nombre = $request->get('buscar');

      $usuarios =User::where('name','like',"%$nombre%")->paginate(10);
       //$usuarios=User::orderBy('id','Asc')->paginate(10);
      return view('admin.users.filtrar',compact('usuarios'));
    }

     public function Asistir($id){

     $usuarios= User::findOrFail($id);
   // $entregar= Reservar::findOrFail($id);
    //$recibir= Reservar::findOrFail($id);
        //$contar = DB::table('reservars')->where('id', $usuarios);
    return view('admin.users.asistio',compact('usuarios'));//'entregar'));
    }

     public function update(Request $request, $id)
    {
         
       
      $datosAsistencia=request()->except(['_token','_method']);
        Asistencia::where('id','=',$id)->update($datosAsistencia);
        $valores['rol']='Si';
        $entregar= Asistencia::findOrFail($id);
        $entregar->fill($valores);
        $entregar->save();

        return redirect('alumnos')->with('status_success','Asistencia Confirmada Exitosamente');
    }



    public function filtrar(Request $request)
    {
      
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');


        $asistencias=Asistencia::where('fecha', '=', $fromDate)->where('hora', '=', $toDate)->paginate(10);
       return  view('admin.users.asistencia',compact('asistencias')); 
    }

 
  

}
