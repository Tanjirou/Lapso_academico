<?php

namespace App\Exports;

use App\Models\DepartmentSection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentSectionsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DepartmentSection::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_Departamento',
            'Descripción',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
