<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recibir;
use App\Reservar;

class RecibirController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
      $this->middleware('isdmin');
    }
    public function create($id){
    	$recibir =Recibir::findOrFail($id);
    	//$reservas = Reservar::findOrFail($id);
    	
       return view('admin.users.Recibir',compact('recibir'));

    }

    public function store(Request $request)
    {
        $recibir=request()->except('_token');
       // $Reservar['user_id']=Auth::id();
       
       $recibir['comentario']='sin comentario';
       Recibir::insert($recibir);
       
       return redirect('material')->with('status_success','Material Rservado Correctamento');;
    }
    

}
