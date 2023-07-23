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
            'id',
            'subjectid',
            'department_sectionid',
            'average_students',
            'number_section',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
