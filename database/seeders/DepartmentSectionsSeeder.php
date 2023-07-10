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
            'description' => 'Electrónica Aplicada',//1
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Comunicación',//2
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Control y Computación',//3
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Ciencias Básicas para la Eléctricidad',//4
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Máquinas Eléctricas',//5
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Sistemas Industriales',//6
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Ingeniería Química',//7
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Química Aplicada',//8
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Laboratorio',//9
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Administración Industrial',//10
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Producción',//11
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Tecnología y Entrenamiento Industrial',//12
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Diseño',//13
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Proceso y Manufactura',//14
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Fluido y Termosistemas',//15
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Metalurgía Química',//16
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Metalurgía Física',//17
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Solidificaión',//18
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Asignaturas Generales',//19
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Matemática',//20
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Fisica',//21
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '7',
            'description' => 'Ciencias Gráficas',//22
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '1',
            'description' => 'Casos Especiales',//23
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '2',
            'description' => 'Casos Especiales',//24
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '3',
            'description' => 'Casos Especiales',//25
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '4',
            'description' => 'Casos Especiales',//26
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '5',
            'description' => 'Casos Especiales',//27
            'status' => 'A',
        ]);
        DB::table('department_sections')->insert([
            'departmentid' => '6',
            'description' => 'Casos Especiales',//28
            'status' => 'A',
        ]);
    }
}
