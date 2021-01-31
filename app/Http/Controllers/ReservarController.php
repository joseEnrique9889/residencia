<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Material;
use App\User;
use App\Reservar;
use App\Entregar;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ReservarController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
      $this->middleware('isdmin');
    }

     public function MaterialReservado(Request $request){
     
         $nombre = $request->get('buscar');

      $usuarios =User::where('name','like',"%$nombre%")->paginate(10);
       //$usuarios=User::orderBy('id','Asc')->paginate(10);
      return view('admin.index',compact('usuarios'));
  
    }

     public function Reservas($id){

     $usuarios= User::findOrFail($id);
   // $entregar= Reservar::findOrFail($id);
    //$recibir= Reservar::findOrFail($id);
        //$contar = DB::table('reservars')->where('id', $usuarios);
    return view('admin.Reservas',compact('usuarios'));//'entregar'));
    }

    public function vida($id)
    {
        
        //devuelve todo el valor del id.
        $vida= Material::findOrFail($id);
       

        return view('admin.users.vida',compact('vida'));
    }
     public function updatevid(Request $request, $id)
    {

      $datosEntregar=request()->except(['_token','_method']);
        
        Material::where('id','=',$id)->update($datosEntregar);
        $valores['reservado']=null;
        $valores['cambio']=null;
        $vida= Material::findOrFail($id);
           DB::table('materials')->where('id','=',$id)->decrement('vida', $request->input('tiempo'));
        $vida->fill($valores);
        $vida->save();

        return redirect('usuarios')->with('status_success','Material Recibido Exitosamente');
    }

    public function edit($id)
    {
        
        //devuelve todo el valor del id.
        $entregar= Reservar::findOrFail($id);
       

        return view('admin.users.edit',compact('entregar'));
    }
       
    public function update(Request $request, $id)
    {      
       
      $datosEntregar=request()->except(['_token','_method']);
       
        Reservar::where('id','=',$id)->update($datosEntregar);


        $valores['recibir']='Regresado';
        
        
        $entregar= Reservar::findOrFail($id);
        $entregar->fill($valores);
       
        $entregar->save();

        return redirect('usuarios')->with('status_success','Material Recibido Exitosamente');
    }

    public function adeudo($id)
    {
        
        //devuelve todo el valor del id.
        $deuda= Reservar::findOrFail($id);

        return view('admin.users.adeudo',compact('deuda'));
    }

   
       

 public function atualizar(Request $request, $id)
    {
         
       
      $datosEntregar=request()->except(['_token','_method']);
        Reservar::where('id','=',$id)->update($datosEntregar);
        $valores['deuda']='Si';
        $adeudo= Reservar::findOrFail($id);
        $adeudo->fill($valores);
        $adeudo->save();
        return redirect('usuarios')->with('status_success','Material Adeudado Registrado');
    }

    //para los aduedos

    public function ListaAdeudo(Request $request){
         $nombre = $request->get('buscar');

      $usuarios =User::where('name','like',"%$nombre%")->paginate(10);
       //$usuarios=User::orderBy('id','Asc')->paginate(10);
      return view('admin.users.listaadeudo',compact('usuarios'));
    }

    public function Deudas($id){

     $usuarios= User::findOrFail($id);
   
    return view('admin.users.deudas',compact('usuarios'));//'entregar'));
    }

    


 /*public function Recibir(Request $request, $id)
    {
         $usuarios= User::findOrFail($id);
       
      $datosRecibir=request()->except(['_token','_method']);
        Reservar::where('id','=',$id)->update($datosRecibir);
        $valores['entregar']='Entregado';
       // $valores['comentario']='Sin comentario';
        $recibir= Reservar::findOrFail($id);
        $recibir->fill($valores);
        $recibir->save();
       return view('admin.Reservas',compact('entregar','usuarios'))->with('status_success','Material Entregado Exitosamente');
    }
   */ 

 }
