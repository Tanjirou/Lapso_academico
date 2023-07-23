<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'academic_curriculaid',
            'dni',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
