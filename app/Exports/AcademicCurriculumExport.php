<?php

namespace App\Exports;

use App\Models\AcademicCurriculum;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AcademicCurriculumExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AcademicCurriculum::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'description',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
