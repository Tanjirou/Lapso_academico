<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Electrónica Aplicada',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Comunicación',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Control y Computación',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Ciencias Básicas para la Eléctricidad',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Máquinas Eléctricas',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Sistemas Industriales',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Ingeniería Química',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Química Aplicada',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Laboratorio',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Administración Industrial',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Producción',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Tecnología y Entrenamiento Industrial',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Diseño',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Proceso y Manufactura',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Fluido y Termosistemas',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Metalurgía Química',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Metalurgía Física',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Solidificaión',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Asignaturas Generales',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Matemática',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Fisica',
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Ciencias Gráficas',
            'status' => 'A',
        ]);
    }
}
