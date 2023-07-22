<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Department::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Departamento',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
