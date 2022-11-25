<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_types')->insert([
            'description' => 'Jefe de departamento',
            'status' => 'A',
        ]);
        DB::table('teacher_types')->insert([
            'description' => 'Jefe de seccion',
            'status' => 'A',
        ]);
        DB::table('teacher_types')->insert([
            'description' => 'Rector',
            'status' => 'A',
        ]);
        DB::table('teacher_types')->insert([
            'description' => 'Profesor general',
            'status' => 'A',
        ]);
    }
}
