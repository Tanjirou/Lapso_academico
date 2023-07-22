<?php

namespace App\Exports;

use App\Models\StudentHistory;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentHistoriesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentHistory::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_estudiante',
            'ID_lapso_academico',
            'Calificacion',
            'Creado en',
            'Actualizado en',
        ];
    }
}
