<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'academic_curriculaid' => 1,
            'dni' => '30100200',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 1,
            'dni' => '31100200',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 2,
            'dni' => '32100200',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 2,
            'dni' => '33100200',
            'status' => 'A',
        ]);
    }
}

