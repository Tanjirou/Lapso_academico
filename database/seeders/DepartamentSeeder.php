<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departaments')->insert([
            'name' => 'Electronica',
            'status' => 'A',
        ]);

        DB::table('departaments')->insert([
            'name' => 'Electrica',
            'status' => 'A',
        ]);

        DB::table('departaments')->insert([
            'name' => 'Quimica',
            'status' => 'A',
        ]);
        DB::table('departaments')->insert([
            'name' => 'Industrial',
            'status' => 'A',
        ]);
        DB::table('departaments')->insert([
            'name' => 'Mecanica',
            'status' => 'A',
        ]);

        DB::table('departaments')->insert([
            'name' => 'Metalurgica',
            'status' => 'A',
        ]);
        DB::table('departaments')->insert([
            'name' => 'Basico',
            'status' => 'A',
        ]);
    }
}
