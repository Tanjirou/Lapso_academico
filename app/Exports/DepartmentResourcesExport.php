<?php

namespace App\Exports;

use App\Models\DepartmentResource;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DepartmentResourcesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DepartmentResource::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'departmentid',
            'quantity',
            'created_at',
            'updated_at',
        ];
    }
}
