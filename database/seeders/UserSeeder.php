<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_type' => '1',
            'dni' => '12345678',
            'password' => bcrypt('12345678'),
            'names' => 'Maria Gabriela',
            'last_names' => 'Alastre',
            'email' => 'malastre@gmail.com',
            'status' => 'A',
        ]);

        DB::table('users')->insert([
            'user_type' => '2',
            'dni' => '4500250',
            'password' => bcrypt('12345678'),
            'names' => 'Adrian',
            'last_names' => 'Figueroa',
            'email' => 'afigueroa@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '2',
            'ndepartament' => '7',
            'college_degree' => 'Licenciado en Física',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '3',
            'dni' => '8887331',
            'password' => bcrypt('12345678'),
            'names' => 'Angela Cristina',
            'last_names' => 'Gomez',
            'email' => 'agomez@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '3',
            'ndepartament' => '2',
            'nmention' => '5',
            'college_degree' => 'Ingenierio Electricista',
            'status' => 'A',
        ]);

        DB::table('users')->insert([
            'user_type' => '4',
            'dni' => '11234670',
            'password' => bcrypt('12345678'),
            'names' => 'Mario',
            'last_names' => 'Sousa',
            'email' => 'msousa@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '4',
            'ndepartament' => '8',
            'college_degree' => 'Ingenierio en Computación',
            'status' => 'A',
        ]);

        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '6333760',
            'password' => bcrypt('12345678'),
            'names' => 'Jesus Maria',
            'last_names' => 'Salas',
            'email' => 'jmsalas@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '5',
            'ndepartament' => '4',
            'nmention' => '10',
            'college_degree' => 'Ingenierio Industrial',
            'status' => 'A',
        ]);
    }
}

