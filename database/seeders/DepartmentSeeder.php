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
            'name' => 'Electrónica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Eléctrica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Química',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Industrial',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Mecánica',
            'status' => 'A',
        ]);

        DB::table('departments')->insert([
            'name' => 'Metalúrgica',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Estudios Básicos',
            'status' => 'A',
        ]);
        DB::table('departments')->insert([
            'name' => 'Servicio Comunitario',
            'status' => 'A',
        ]);
    }
}
