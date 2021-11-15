<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'description' => 'Administrador',
            'status' => 'A',
            'created_at' => '14-11-2021',
            'updated_at' => '14-11-2021'
        ]);
        DB::table('user_types')->insert([
            'description' => 'Profesor',
            'status' => 'A',
            'created_at' => '14-11-2021',
            'updated_at' => '14-11-2021'
        ]);

        DB::table('user_types')->insert([
            'description' => 'Estudiante',
            'status' => 'A',
            'created_at' => '14-11-2021',
            'updated_at' => '14-11-2021'
        ]);
    }
}
