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
            'id',
            'departmentid',
            'description',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
