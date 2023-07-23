<?php

namespace App\Exports;

use App\Models\UserType;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserTypesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserType::all();
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
