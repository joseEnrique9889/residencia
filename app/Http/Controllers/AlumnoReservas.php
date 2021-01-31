<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Material;
use App\User;
use App\Reservar;
use App\Asistencia;


class AlumnoReservas extends Controller
{

	public function index()
    {
        $reservados = Reservar::where('user_id',Auth::id())->get();

      return view('admin.users.index',compact('reservados'));
    }
	

    public function Material(Request $request)
    {
        //$materials=Material::get()->paginate(10);
        $nombre = $request->get('buscar');

      $materials =Material::where('nombre','like',"%$nombre%")->paginate(10);
        // $materials=Material::get();
        return view('alumno.materiales.index',compact('materials'));
    }
     public function create($id){
    	$material =Material::findOrFail($id);
    	$usuarios = User::where('id',Auth::id())->get();
    	//$user =Material::findOrFail($id);



       return view('admin.users.create',compact('material','usuarios'));

    }
     public function store(Request $request)
    {
      

        $Reservar=request()->except('_token');
        $Reservar['user_id']=Auth::id();
        
       
       Reservar::insert($Reservar);



       return redirect('material')->with('status_success','Fecha y Hora Registrada Confirmar Reservar');
    }


     public function confirmar($id)
    {
        
        //devuelve todo el valor del id.
        $conf= Material::findOrFail($id);
       

        return view('admin.users.confirmar',compact('conf'));
    }

    public function updateconf(Request $request, $id)
    {

      $datosEntregar=request()->except(['_token','_method']);
        
        Material::where('id','=',$id)->update($datosEntregar);
        $valores['reservado']=1;
        $valores['cambio']=2;
        $conf= Material::findOrFail($id);
        $conf->fill($valores);
        $conf->save();

        return redirect('material')->with('status_success','Material Reservado Exitosamente seleccione otro material');
    }

    public function createasist(){
    	
    	//$user =Material::findOrFail($id);
       return view('admin.users.asistencia_create');

    }

     public function storeasist(Request $request)
    {
        $asistir=request()->except('_token');
        $asistir['user_id']=Auth::id();
        
       Asistencia::insert($asistir);
       return redirect('admin')->with('status_success','Asistencia creada Correctamente');
    }


}
