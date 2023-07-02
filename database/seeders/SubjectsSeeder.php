<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1115',
            'name' => 'Calculo I',
            'credit_units' => 5,
            'status' => 'A',
        ]);
    }
}
