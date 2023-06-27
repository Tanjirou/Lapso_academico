<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Electronica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Electrica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Quimica',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Industrial',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Mecanica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Metalurgica',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Basico',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Servicio Comunitario',
            'status' => 'A',
        ]);
    }
}
