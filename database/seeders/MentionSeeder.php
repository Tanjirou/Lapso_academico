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
            'departmentid' => '2',
            'name' => 'Ciencias Básicas para la Eléctricidad',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '2',
            'name' => 'Máquinas Eléctricas',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '2',
            'name' => 'Sistemas Industriales',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '3',
            'name' => 'Ingeniería Química',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '3',
            'name' => 'Química Aplicada',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '3',
            'name' => 'Laboratorio',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '4',
            'name' => 'Administración Industrial',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '4',
            'name' => 'Producción',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '4',
            'name' => 'Tecnología y Entrenamiento Industrial',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '5',
            'name' => 'Diseño',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '5',
            'name' => 'Proceso y Manufactura',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '5',
            'name' => 'Fluido y Termosistemas',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '6',
            'name' => 'Metalurgía Química',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '6',
            'name' => 'Metalurgía Física',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '6',
            'name' => 'Solidificaión',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Asignaturas Generales',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Matemática',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Fisica',
            'status' => 'A',
        ]);
        DB::table('mentions')->insert([
            'departmentid' => '7',
            'name' => 'Ciencias Gráficas',
            'status' => 'A',
        ]);

    }
}
