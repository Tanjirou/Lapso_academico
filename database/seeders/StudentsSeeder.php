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
            'name' => 'Juan Pablo Almao',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 1,
            'dni' => '31100200',
            'name' => 'Isabela Riera',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 2,
            'dni' => '32100200',
            'name' => 'Angel Navas',
            'status' => 'A',
        ]);
        DB::table('students')->insert([
            'academic_curriculaid' => 2,
            'dni' => '32100200',
            'name' => 'Jimena Gil',
            'status' => 'A',
        ]);
    }
}

