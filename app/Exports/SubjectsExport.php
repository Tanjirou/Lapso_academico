<?php

namespace App\Exports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubjectsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subject::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_seccion_asignatura',
            'Codigo',
            'Nombre',
            'Unidades_credito',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
