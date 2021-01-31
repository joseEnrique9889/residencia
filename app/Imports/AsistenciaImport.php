<?php

namespace App\Imports;

use App\Asistencia;
use Maatwebsite\Excel\Concerns\ToModel;

class AsistenciaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Asistencia([
            'grupo'     => $row[3], //a
            'rol'    => $row[4],
            
        ]);
    }
}
