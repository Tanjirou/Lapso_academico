<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicCurriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Eléctrica',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Electrónica (Comunicaciones)',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Electrónica (Computación)',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Electrónica (Control)',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Industrial',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Mecánica',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería Metalúrgica',
            'status' => 'A',
        ]);

        DB::table('academic_curricula')->insert([
            'description' => 'Ingeniería QuÍmica',
            'status' => 'A',
        ]);
    }
}
