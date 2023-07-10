<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'teacherid' => 1,
            'structure_sectionid' => 1,
            'academic_lapseid' => 1,
            'subjectid' => 1,
            'section_number' => '2',
            'status' => 'F',
        ]);
    }
}
