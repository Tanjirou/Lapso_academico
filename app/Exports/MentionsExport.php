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
            'id',
            'subjectid',
            'academic_curriculaid',
            'pre_req',
            'post_req',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
