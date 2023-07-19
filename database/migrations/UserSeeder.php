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
            'dni' => '23849935',
            'password' => bcrypt('25526934'),//1
            'names' => 'Jorge y José',
            'last_names' => '',
            'email' => 'spaunexpo2023@gmail.com',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '2',
            'dni' => '13268625',
            'password' => bcrypt('13268625'),//2
            'names' => 'Gabriel',
            'last_names' => 'Noriega',
            'email' => 'jefed@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '2',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '3',
            'dni' => '7306849',
            'password' => bcrypt('7306849'),//3
            'names' => 'Carlos',
            'last_names' => 'Zambrano',
            'email' => 'jefes1@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '3',
            'ndepartament' => '1',
            'nmention' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '3',
            'dni' => '9844616',
            'password' => bcrypt('9844616'),//4
            'names' => 'Angel',
            'last_names' => 'León',
            'email' => 'jefes2@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '4',
            'ndepartament' => '1',
            'nmention' => '2',
            'college_degree' => '',
            'status' => 'A',
        ]);

        DB::table('users')->insert([
            'user_type' => '3',
            'dni' => '9587062',
            'password' => bcrypt('9587062'),//5
            'names' => 'Elvis',
            'last_names' => 'Morillo',
            'email' => 'jefes3@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '5',
            'ndepartament' => '1',
            'nmention' => '3',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9543574',
            'password' => bcrypt('9543574'),//6
            'names' => 'Rosa',
            'last_names' => 'Leal',
            'email' => 'prof1@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '6',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '16794154',
            'password' => bcrypt('16794154'),//7
            'names' => 'Aníbal',
            'last_names' => 'García',
            'email' => 'prof2@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '7',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '12707346',
            'password' => bcrypt('12707346'),//8
            'names' => 'Rossiry',
            'last_names' => 'Rodríguez',
            'email' => 'prof3@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '8',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '6446084',
            'password' => bcrypt('6446084'),//9
            'names' => 'Iris',
            'last_names' => 'Alvarado',
            'email' => 'prof4@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '9',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '13464722',
            'password' => bcrypt('13464722'),//10
            'names' => 'Keila',
            'last_names' => 'Candotti',
            'email' => 'prof5@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '10',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '11596091',
            'password' => bcrypt('11596091'),//11
            'names' => 'Omar',
            'last_names' => 'Benvenuto',
            'email' => 'prof6@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '11',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '15177950',
            'password' => bcrypt('15177950'),//12
            'names' => 'Víctor',
            'last_names' => 'González',
            'email' => 'prof7@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '12',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9618754',
            'password' => bcrypt('9618754'),//13
            'names' => 'Dimas',
            'last_names' => 'Mavares',
            'email' => 'prof8@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '13',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '7423584',
            'password' => bcrypt('7423584'),//14
            'names' => 'Domingo',
            'last_names' => 'Navarro',
            'email' => 'prof9@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '14',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '11834161',
            'password' => bcrypt('11834161'),//15
            'names' => 'José Luis',
            'last_names' => 'Gómes',
            'email' => 'prof10@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '15',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '13407885',
            'password' => bcrypt('13407885'),//16
            'names' => 'Heddy Lu',
            'last_names' => 'Giménez',
            'email' => 'prof11@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '16',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '5004747',
            'password' => bcrypt('5004747'),//17
            'names' => 'Manuel',
            'last_names' => 'Picón',
            'email' => 'prof12@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '17',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '7310170',
            'password' => bcrypt('7310170'),//18
            'names' => 'Luis',
            'last_names' => 'Alvarado',
            'email' => 'prof13@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '18',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9546410',
            'password' => bcrypt('9546410'),//19
            'names' => 'Samuel',
            'last_names' => 'Blas',
            'email' => 'prof14@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '19',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9616060',
            'password' => bcrypt('9616060'),//20
            'names' => 'Eric',
            'last_names' => 'Sira',
            'email' => 'prof15@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '20',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '6975252',
            'password' => bcrypt('6975252'),//21
            'names' => 'Lenin',
            'last_names' => 'Becerra',
            'email' => 'prof16@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '21',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '7405792',
            'password' => bcrypt('7405792'),//22
            'names' => 'Amador',
            'last_names' => 'Orozco',
            'email' => 'prof17@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '22',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '12249952',
            'password' => bcrypt('12249952'),//23
            'names' => 'Carlos',
            'last_names' => 'Indriago',
            'email' => 'prof18@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '23',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '12345678',
            'password' => bcrypt('12345678'),//24
            'names' => 'Pablo',
            'last_names' => 'Lucena',
            'email' => 'prof19@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '24',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9607034',
            'password' => bcrypt('9607034'),//25
            'names' => 'Tania',
            'last_names' => 'Moncayo',
            'email' => 'prof20@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '25',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);


        DB::table('users')->insert([
            'user_type' => '5',
            'dni' => '9623968',
            'password' => bcrypt('9623968'),//26
            'names' => 'Roberto',
            'last_names' => 'Uzcátegui',
            'email' => 'prof21@gmail.com',
            'status' => 'A',
        ]);
        DB::table('teachers')->insert([
            'userid' => '26',
            'ndepartament' => '1',
            'college_degree' => '',
            'status' => 'A',
        ]);
    }
}

