<?php

namespace App\Exports;

use App\Models\Teacher;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TeachersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Teacher::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_Usuario',
            'ID_Departamento',
            'ID_Seccion_Departamento',
            'Titulo_Profesor',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
