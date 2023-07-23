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
            'id',
            'studentid',
            'subjectid',
            'academic_lapse',
            'qualification',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
