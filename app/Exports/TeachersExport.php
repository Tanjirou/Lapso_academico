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
            'id',
            'userid',
            'ndepartament',
            'nmention',
            'college_degree',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}