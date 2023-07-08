<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_sections')->insert([
            'sectionid' => 1,
            'studentid' => 1,
            'studentcurriculum' => 1,
            'qualification' => 'Aprobado',
            'status' => 'F',
        ]);
        DB::table('detail_sections')->insert([
            'sectionid' => 1,
            'studentid' => 2,
            'studentcurriculum' => 1,
            'qualification' => 'Reprobado',
            'status' => 'F',
        ]);
        DB::table('detail_sections')->insert([
            'sectionid' => 1,
            'studentid' => 3,
            'studentcurriculum' => 2,
            'qualification' => 'Aprobado',
            'status' => 'F',
        ]);
        DB::table('detail_sections')->insert([
            'sectionid' => 1,
            'studentid' => 4,
            'studentcurriculum' => 3,
            'qualification' => 'Reprobado',
            'status' => 'F',
        ]);
    }
}