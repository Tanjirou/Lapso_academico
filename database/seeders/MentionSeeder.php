<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentions')->insert([
            'departmentid' => '1',
            'name' => 'Electrónica Aplicada',
            'status' => 'A',
        ]);

        DB::table('mentions')->insert([
            'departmentid' => '1',
            'name' => 'Comunicación',
            'status' => 'A',
        ]);

        DB::table('mentions')->insert([
            'departmentid' => '1',
            'name' => 'Control y Computación',
            'status' => 'A',
        ]);

        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Matematica',
            'status' => 'A',
        ]);

        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Fisica',
            'status' => 'A',
        ]);
    }
}
