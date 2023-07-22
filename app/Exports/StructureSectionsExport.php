<?php

namespace App\Exports;

use App\Models\StructureSection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StructureSectionsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StructureSection::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_asignatura',
            'ID_departamento_asignatura',
            'Cantidad_estudiantes',
            'Numero_seccion',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
