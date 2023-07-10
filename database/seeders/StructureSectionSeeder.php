<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structure_sections')->insert([
            'subjectid' => 1,
            'department_sectionid' => 20,
            'average_students' => 20,
            'number_section' => 2,
            'status' => 'A',
        ]);
    }
}
