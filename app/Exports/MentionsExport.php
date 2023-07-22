<?php

namespace App\Exports;

use App\Models\Mention;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MentionsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mention::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'ID_asignatura',
            'ID_pensum',
            'Pre_requisito',
            'Post_requisito',
            'Estatus',
            'Creado en',
            'Actualizado en',
        ];
    }
}
