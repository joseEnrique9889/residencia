<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservar;
use App\Material;
use App\Asistencia;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

use App\Exports\AsistenciaExport;
use App\Imports\AsistenciaImport;

class ReportesController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
      $this->middleware('isdmin');
    }
    public function reportes()
    {
        //$reservados = Reservar::where('user_id',Auth::id())->get();
       $reservados=Reservar::orderBy('id','Asc')->paginate(10);
      return view('admin.materiales.reportematerial',compact('reservados'));
    }

  	public function pdf(Request $request){
   
    $reservados=Reservar::orderBy('id','Asc');
      return view('admin.materiales.generarReporte',compact('reservados'));
        
  }
	public function generar(Request $request)
    {
      
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $reservados=Reservar::where('fecha', '>=', $fromDate)->where('fecha', '<=', $toDate)->get();

        $pdf = \PDF::loadView('admin.materiales.pdf', compact('reservados'));
        return $pdf->download('Bitacora.pdf');
}

	 public function search(Request $request)
    {
      
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $reservados=Reservar::where('fecha', '>=', $fromDate)->where('fecha', '<=', $toDate)->paginate(10);
       return  view('admin.materiales.reportematerial',compact('reservados')); 
		}

	public function index(){
		    $materials=Material::orderBy('id','Asc')->paginate(10);
        
        return view('admin.materiales.materialexistente',compact('materials'));
	}


	 public function ReporteMaterial(){

    	$materiales = Material::all();
    	$pdf = \PDF::loadView('admin.materiales.generarReporteMat', compact('materiales'));
    	return $pdf->download('reporte Materiales Existentes.pdf');
    }

    public function ReporteAsistencia(){

      //$materiales = Material::all();

     return Excel::download(new AsistenciaExport, 'Lista.xlsx');
     // return $pdf->download('reporte Materiales Existentes.pdf');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new AsistenciaImport, $file);

        return back()->with('message', 'Importanción de usuarios completada');
    }

    public function generarReport(Request $request)
    {
      
        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $asistencias=Asistencia::where('fecha', '>=', $fromDate)->where('fecha', '<=', $toDate)->get();

        $pdf = \PDF::loadView('admin.reporteAsis.pdf', compact('asistencias'));
        return $pdf->download('Reporte.pdf');
}

public function GenerarConstancia(Request $request){
         $nombre = $request->get('buscar');

      $usuarios =User::where('name','like',"%$nombre%")->paginate(10);
       //$usuarios=User::orderBy('id','Asc')->paginate(10);
      return view('admin.users.constancias',compact('usuarios'));
    }

        
        public function constancia($id)
    {
        $constancia= User::findOrFail($id);
       // $constancia=User::get();
               // $today = Carbon::now()->format('d/m/Y');
        $today = Carbon::now()->formatLocalized('%d %B %Y');
        $pdf = \PDF::loadView('admin.users.genconstancia', compact('constancia', 'today'));
        return $pdf->stream('Reporte.pdf');
}

  

}
