<?php

namespace App\Exports;

use App\Asistencia;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class AsistenciaExport implements FromView
{
  

    public function view(): View 
    {


      return view('admin.users.exports.asistencias',[
        'asistencias' => Asistencia::orderBy('id','Asc')->get()

      ]);
    	
    }
}
