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
        //SEMESTRE I
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1115',
            'name' => 'Cálculo I',//1
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 22,
            'code' => 'EB3112',
            'name' => 'Dibujo I',//2
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB4121',
            'name' => 'Inglés Técnico I',//3
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6113',
            'name' => 'Lenguaje y Redacción',//4
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6411',
            'name' => 'Actividades Complementarias',//5
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7113',
            'name' => 'Desarrollo de Habilidad del Pensamiento I',//6
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ5113',
            'name' => 'Química General',//7
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //SEMESTRE II
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1125',
            'name' => 'Cálculo II',//8
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2115',
            'name' => 'Física I',//9
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 22,
            'code' => 'EB3122',
            'name' => 'Dibujo II',//10
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB2115',
            'name' => 'Inglés Técnico II',//11
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7123',
            'name' => 'Desarrollo de Habilidad del Pensamiento II',//12
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7212',
            'name' => 'Lectura Crítica',//13
            'credit_units' => 2,
            'status' => 'A',
        ]);



        //SEMESTRE III
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1134',
            'name' => 'Calculo III',//14
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1213',
            'name' => 'Algebra Lineal',//15
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2124',
            'name' => 'Física II',//16
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2211',
            'name' => 'Laboratorio de Física',//17
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7133',
            'name' => 'Desarrollo de Habilidad del Pensamiento III',//18
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5114',
            'name' => 'Circuitos Eléctricos I',//19
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2311',
            'name' => 'Iniciación Profesional',//20
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1022',
            'name' => 'Dibujo de Máquina',//21
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1112',
            'name' => 'Dibujo de Máquinas',//22
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1253',
            'name' => 'Mecánica Aplicada I',//23
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2103',
            'name' => 'Físico-Química',//24
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3121',
            'name' => 'Laboratorio de Química General',//25
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3213',
            'name' => 'Química Analítica',//26
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //SEMESTRE IV
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1144',
            'name' => 'Calculo IV',//27
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1312',
            'name' => 'Programación',//28
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1154',
            'name' => 'Matemáticas Especiales',//29
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5124',
            'name' => 'Circuitos Eléctricos II',//30
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5213',
            'name' => 'Electrometría',//31
            'credit_units' => 3,
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5221',
            'name' => 'Laboratorio de Electrometría',//32
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6112',
            'name' => 'Máquinas Eléctricas I',//33
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6542',
            'name' => 'Introducción a la Administración',//34
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1142',
            'name' => 'Mediciones Eléctricas',//35
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1154',
            'name' => 'Electrónica I',//36
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5131',
            'name' => 'Laboratorio de Circuitos Eléctricos',//37
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1043',
            'name' => 'Mecánica Aplicada',//38
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4063',
            'name' => 'Termodinámica',//39
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4093',
            'name' => 'Ingeniería Química',//40
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1263',
            'name' => 'Mecánica Aplicada II',//41
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5014',
            'name' => 'Fundamentos de Ingeniería Eléctrica',//42
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3022',
            'name' => 'Análisis Químico Metalúrgico',//43
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2133',
            'name' => 'Procesos Metalúrgicos',//44
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2143',
            'name' => 'Termodinámica Metalúrgica',//45
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3113',
            'name' => 'Elementos Físico-Química',//46
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3222',
            'name' => 'Laboratorio de Química Analítica',//47
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4113',
            'name' => 'Principios de Ingeniería Química',//48
            'credit_units' => 3,
            'status' => 'A',
        ]);





        //SEMESTRE V
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1013',
            'name' => 'Electrónica Analógica',//49
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3013',
            'name' => 'Teoría de Control',//50
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5313',
            'name' => 'Teoría Electromagnética',//51
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6122',
            'name' => 'Máquinas Eléctricas II',//52
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3043',
            'name' => 'Probabilidad y Estadística',//53
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6552',
            'name' => 'Administración de Empresas',//54
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1123',
            'name' => 'Tecnología Electrónica',//55
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1161',
            'name' => 'Laboratorio I de Electrónica',//56
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1183',
            'name' => 'Electrónica II',//57
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2113',
            'name' => 'Análisis de Señales',//58
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3213',
            'name' => 'Circuitos Digitales I',//59
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4073',
            'name' => 'Fenómenos de Transporte',//60
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2322',
            'name' => 'Plantas Industriales y Mantenimientos de Materiales',//61
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1054',
            'name' => 'Resistencia y Ensayo de Materiales',//62
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3114',
            'name' => 'Estadística Industrial',//63
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1273',
            'name' => 'Mecanismos',//64
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1324',
            'name' => 'Resistencia de Materiales',//65
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1331',
            'name' => 'Ensayos de Resistencia de Materiales',//66
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2114',
            'name' => 'Máquinas Herramientas',//67
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3153',
            'name' => 'Termodinámica I',//68
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4013',
            'name' => 'Fenómenos de Transporte I',//69
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1134',
            'name' => 'Metalurgía Física I',//70
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2212',
            'name' => 'Metalurgía Extractiva I',//71
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1013',
            'name' => 'Fundamentos de Resistencia de Materiales',//72
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3313',
            'name' => 'Química Orgánica I',//73
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4213',
            'name' => 'Termodinámica I',//74
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4313',
            'name' => 'Fenómenos de Transporte I',//75
            'credit_units' => 3,
            'status' => 'A',
        ]);






        //SEMESTRE VI
        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3023',
            'name' => 'Ingeniería Económica',//76
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1033',
            'name' => 'Circuitos Digitales I',//77
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1041',
            'name' => 'Laboratorio de Electrónica',//78
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6134',
            'name' => 'Máquinas Eléctricas III',//79
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6214',
            'name' => 'Materiales Eléctricos',//80
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7113',
            'name' => 'Transmisión de Energía Eléctrica I',//81
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7514',
            'name' => 'Instalaciones Eléctricas I',//82
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1181',
            'name' => 'Laboratorio II de Electrónica',//83
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1313',
            'name' => 'Electrónica III',//84
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2124',
            'name' => 'Sistemas de Comunicaciones I',//85
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2213',
            'name' => 'Teoría Electromagnética',//86
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3163',
            'name' => 'Teoría de Control',//87
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3221',
            'name' => 'Laboratorio de Circuitos Digitales I',//88
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL4143',
            'name' => 'Programación II',//89
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6013',
            'name' => 'Máquinas Eléctricas',//90
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1063',
            'name' => 'Elementos de Máquina',//91
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2014',
            'name' => 'Tecnología de Fabricación I',//92
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4003',
            'name' => 'Transferencia de Calor',//93
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2113',
            'name' => 'Ingeniería del Trabajo',//94
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2121',
            'name' => 'Laboratoio de Ingeniería del Trabajo',//95
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1015',
            'name' => 'Tecnología de Materiales',//96
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1443',
            'name' => 'Elementos de Máquinas I',//97
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2314',
            'name' => 'Metrología y Calidad',//98
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3163',
            'name' => 'Termodinámica II',//99
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3224',
            'name' => 'Mecánica de Fluidos',//100
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4034',
            'name' => 'Fenómenos de Transporte II',//101
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1144',
            'name' => 'Metalurgía Física II',//102
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2222',
            'name' => 'Metalurgía Extractiva II',//103
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3233',
            'name' => 'Análisis Instrumental',//104
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3323',
            'name' => 'Química Orgánica II',//105
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ4224',
            'name' => 'Termodinámica II',//106
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ4334',
            'name' => 'Fenómenos de Transporte II',//107
            'credit_units' => 4,
            'status' => 'A',
        ]);





        //SEMESTRE VII
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1054',
            'name' => 'Electrónica Industrial',//108
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6142',
            'name' => 'Laboratorio de Máquinas Eléctricas',//109
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7213',
            'name' => 'Análisis Sistemas Eléctricos de Potencia I',//110
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7523',
            'name' => 'Instalaciones Eléctricas II',//111
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7613',
            'name' => 'Redes Eléctricas',//112
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2223',
            'name' => 'Radiación y Propagación',//113
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2263',
            'name' => 'Líneas de Transmisión',//114
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2313',
            'name' => 'Telefonía I',//115
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3121',
            'name' => 'Laboratorio I de Sistemas de Control',//116
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3234',
            'name' => 'Microprocesadores y Microcontroladores',//117
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3333',
            'name' => 'Instrumentación Electrónica',//118
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3183',
            'name' => 'Control Digital',//119
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4153',
            'name' => 'Estructuras de Datos',//120
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4172',
            'name' => 'Análisis Numérico',//121
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1223',
            'name' => 'Electrónica Industrial I',//122
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3173',
            'name' => 'Sistemas de Control en Tiempo Contínuo',//123
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'IE6021',
            'name' => 'Laboratorio de Máquinas Eléctricas',//124
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4031',
            'name' => 'Laboratorio de Fenómenos de Transporte',//125
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL3034',
            'name' => 'Instrumentación y Control',//126
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1114',
            'name' => 'Investigación de Operaciones I',//127
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1213',
            'name' => 'Control de Calidad',//128
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1313',
            'name' => 'Planificación y Control de la Producción',//129
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3214',
            'name' => 'Ingeniería de Costo',//130
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1453',
            'name' => 'Elementos de Máquinas II',//131
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2234',
            'name' => 'Tecnología Mecánica I',//132
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3234',
            'name' => 'Máquinas e Instalaciones Hidráulicas',//133
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1053',
            'name' => 'Control de Calidad',//134
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'EL3121',
            'name' => 'Tecnología de Fabricación II',//135
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1313',
            'name' => 'Tratamientos Térmicos',//136
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2231',
            'name' => 'Laboratorio de Metalurgía Extractiva',//137
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4213',
            'name' => 'Fundición',//138
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3241',
            'name' => 'Laboratorio de Análisis Instrumental',//139
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3332',
            'name' => 'Laboratorio de Química Orgánica',//140
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3413',
            'name' => 'Cinética Química',//141
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4331',
            'name' => 'Laboratorio de Fenómenos de Transporte',//142
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4414',
            'name' => 'Operaciones Unitarias I',//143
            'credit_units' => 4,
            'status' => 'A',
        ]);






        //SEMESTRE VIII
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1043',
            'name' => 'Gestión de Mantenimiento',//144
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6314',
            'name' => 'Controles Eléctricos',//145
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7313',
            'name' => 'Protección de Sistemas Eléctricos de Potencia',//146
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2153',
            'name' => 'Sistemas de Comunicaciones II',//147
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2164',
            'name' => 'Redes de Computadoras',//148
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2273',
            'name' => 'Comunicaciones Móviles',//149
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2281',
            'name' => 'Laboratorio de Microondas',//150
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4183',
            'name' => 'Sistemas Operativos',//151
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4333',
            'name' => 'Diseño de Sistemas de Computación',//152
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1243',
            'name' => 'Electrónica Industrial II',//153
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3142',
            'name' => 'Laboratorio II de Sistemas de Control',//154
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3193',
            'name' => 'Sistemas de Control en Tiempo Discreto',//155
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3223',
            'name' => 'Ingeniería Económica',//156
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1123',
            'name' => 'Investigación de Operaciones II',//157
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1323',
            'name' => 'Mantenimiento Industrial',//158
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1332',
            'name' => 'Trabajo Especial I',//159
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2213',
            'name' => 'Higiene y Seguridad Industrial',//160
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1463',
            'name' => 'Vibraciones y Balanceo',//161
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2244',
            'name' => 'Tecnología Mecánica II',//162
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3173',
            'name' => 'Máquinas Térmicas I',//163
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3323',
            'name' => 'Transferencia de Calor',//164
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM4112',
            'name' => 'Trabajo Especial I',//165
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4053',
            'name' => 'Soldadura',//166
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2323',
            'name' => 'Corrosión',//167
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3112',
            'name' => 'Metalurgía Mecánica I',//168
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4123',
            'name' => 'Ingeniería de la Soldadura',//169
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4234',
            'name' => 'Siderúrgia',//170
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1033',
            'name' => 'Planificación y Control de la Producción',//171
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3421',
            'name' => 'Laboratorio de Termodinámica y Cinética',//172
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4424',
            'name' => 'Operaciones Unitarios II',//173
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4513',
            'name' => 'Reactores Químicos',//174
            'credit_units' => 3,
            'status' => 'A',
        ]);






        //SEMESTRE IX
        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7321',
            'name' => 'Laboratorio de Protección de Sistema de Potencia',//175
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7413',
            'name' => 'Plantas Eléctricas y Subestaciones',//176
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2333',
            'name' => 'Telefonía II',//177
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4341',
            'name' => 'Laboratorio de Sistema de Computación',//178
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4373',
            'name' => 'Arquitectura del Computador',//179
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1252',
            'name' => 'Laboratorio de Electrónica Industrial',//180
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3324',
            'name' => 'Instrumentación Industrial',//181
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1393',
            'name' => 'Trabajo Especial II',//182
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2333',
            'name' => 'Instalaciones Industriales',//183
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3263',
            'name' => 'Teoría de Decisiones',//184
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3243',
            'name' => 'Proyectos Industriales',//185
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3313',
            'name' => 'Gerencia de Recursos Humanos',//186
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3184',
            'name' => 'Máquinas Térmicas II',//187
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM4123',
            'name' => 'Trabajo Especial II',//188
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1223',
            'name' => 'Ensayos no Destructivos',//189
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3132',
            'name' => 'Metalurgía Mecánica II',//190
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3111',
            'name' => 'Laboratorio Metalurgía Mecánica',//191
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4432',
            'name' => 'Laboratorio de Operaciones Unitarias',//192
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4523',
            'name' => 'Ingeniería de Procesos',//193
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4552',
            'name' => 'Simulación de Operaciones y Procesos Químicos',//194
            'credit_units' => 2,
            'status' => 'A',
        ]);






        //SEMESTRE X
        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II24216',
            'name' => 'Entrenamiento Industrial',//195
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM51216',
            'name' => 'Entrenamiento Industrial',//196
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2418',
            'name' => 'Entrenamiento Industrial Opcional',//197
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM5118',
            'name' => 'Entrenamiento Industrial Opcional',//198
            'credit_units' => 8,
            'status' => 'A',
        ]);





        //ELECTIVAS ELÉCTRICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3034',
            'name' => 'Instrumentación Industrial (Electiva)',//199
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE7753',
            'name' => 'Controles Eléctricos II (Electiva)',//200
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7713',
            'name' => 'Transmisión Energía Eléctrica II (Electiva)',//201
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7723',
            'name' => 'Análisis Sistema Eléctrico de Potencia II (Electiva)',//202
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7733',
            'name' => 'Técnicas de Alta Tensión (Electiva)',//203
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7763',
            'name' => 'Control y Operaciones de Sistemas de Potencia (Electiva)',//204
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7743',
            'name' => 'Planificación Sistemas de Potencia (Electiva)',//205
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1033',
            'name' => 'Planificación y Control de la Producción (Electiva)',//206
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1053',
            'name' => 'Control de Calidad (Electiva)',//207
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3013',
            'name' => 'Ingeniería de Costos (Electiva)',//208
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1073',
            'name' => 'Diseño de Experimentos (Electiva)',//209
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS ELECTRÓNICA TODAS
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1643',
            'name' => 'Electrónica Industrial I (Electiva)',//210
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1623',
            'name' => 'Análisis de Circuitos Electrónicos Asistidos por Computador (Electiva)',//211
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1633',
            'name' => 'Tópicos Especiales en Electrónica (Electiva)',//212
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2633',
            'name' => 'Comunicaciones Vía Satélite (Electiva)',//213
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2643',
            'name' => 'Análisis de Circuitos Electrónicos para Comunicaciones (Electiva)',//214
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2653',
            'name' => 'Televisión (Electiva)',//215
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2673',
            'name' => 'Ingeniería de Transmisión (Electiva)',//216
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2693',
            'name' => 'Tópicos Especiales en Comunicaciones (Electiva)',//217
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2683',
            'name' => 'Telefonía Móvil Celular (Electiva)',//218
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2664',
            'name' => 'Redes de Computadoras (Electiva)',//219
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3624',
            'name' => 'Instrumentación Industrial (Electiva)',//220
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3662',
            'name' => 'Controladores Lógicos Programables (Electiva)',//221
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3683',
            'name' => 'Sistemas de Control en Tiempo Contínuo (Electiva)',//222
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3653',
            'name' => 'Control de Sistemas a Eventos Discretos (Electiva)',//223
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3663',
            'name' => 'Controladores Lógicos Programables PLC (Electiva)',//224
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3693',
            'name' => 'Sistemas de Control en Tiempo Discreto (Electiva)',//225
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3613',
            'name' => 'Tópicos Especiales en Control (Electiva)',//226
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4633',
            'name' => 'Robótica (Electiva)',//227
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4643',
            'name' => 'Diseño de Software (Electiva)',//228
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4653',
            'name' => 'Algoritmos Genéticos y Sistemas Entrenables (Electiva)',//229
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4603',
            'name' => 'Tópicos Especiales en Computación (Electiva)',//230
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4693',
            'name' => 'Programación II (Electiva)',//231
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4683',
            'name' => 'Diseño de Sistemas de Computación (Electiva)',//232
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4673',
            'name' => 'Arquitectura del Computador (Electiva)',//233
            'credit_units' => 3,
            'status' => 'A',
        ]);




        //ELECTIVAS INDUSTRIAL
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1363',
            'name' => 'Diseño de Experimentos (Electiva)',//234
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1353',
            'name' => 'Gerencia de Producción (Electiva)',//235
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1383',
            'name' => 'Logística Industrial (Electiva)',//236
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1373',
            'name' => 'Gestión y Aseguramiento de la Calidad (Electiva)',//237
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2133',
            'name' => 'Tópicos de Ingeniería de Métodos (Electiva)',//238
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2223',
            'name' => 'Elaboración de Programas de Higiéne y Seguridad (Electiva)',//238
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2233',
            'name' => 'Higiéne Industrial e Ingeniería Sanitaria (Electiva)',//240
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2243',
            'name' => 'Gestión Ambiental (Electiva)',//241
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3123',
            'name' => 'Probabilidad y Estadística Aplicada (Electiva)',//242
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3253',
            'name' => 'Finanzas Empresariales (Electiva)',//243
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3323',
            'name' => 'Gerencia y Productividad (Electiva)',//244
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3333',
            'name' => 'Investigación de Mercado (Electiva)',//245
            'credit_units' => 3,
            'status' => 'A',
        ]);




        //ELECTIVAS MECÁNICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3253',
            'name' => 'Neumática (Electiva)',//246
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM33333',
            'name' => 'Refrigeración y Aire Aoondicionado (Electiva)',//247
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3243',
            'name' => 'Sistemas Hidráulicos (Electiva)',//248
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1013',
            'name' => 'Tratamientos Térmicos (Electiva)',//249
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1023',
            'name' => 'Ensayos no Destructivos (Electiva)',//250
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2013',
            'name' => 'Corrosión (Electiva)',//251
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4023',
            'name' => 'Fundición (Electiva)',//252
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM3633',
            'name' => 'Tribología (Electiva)',//253
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2433',
            'name' => 'Control Numérico (Electiva)',//254
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2413',
            'name' => 'Mantenimiento Mecánico (Electiva)',//255
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS METALÚRGICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1043',
            'name' => 'Gestión de Mantenimiento (Electiva)',//256
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1613',
            'name' => 'Metalografía Industrial (Electiva)',//257
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1623',
            'name' => 'Aceros Especiales (Electiva)',//258
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3633',
            'name' => 'Análisis de Fallas (Electiva)',//259
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3613',
            'name' => 'Metalurgía del Mecanizado (Electiva)',//260
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2613',
            'name' => 'Tratamientos de Superficie (Electiva)',//261
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2643',
            'name' => 'Concentración de Minerales (Electiva)',//262
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4683',
            'name' => 'Colada Contínua (Electiva)',//263
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4653',
            'name' => 'Fundición Avanzada (Electiva)',//264
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4663',
            'name' => 'Materiales Refractarios (Electiva)',//265
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4673',
            'name' => 'Tecnología del Aluminio (Electiva)',//266
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM3023',
            'name' => 'Tribología (Electiva)',//267
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS QUÍMICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3613',
            'name' => 'Química de Alimentos (Electiva)',//268
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3623',
            'name' => 'Introducción a la Tecnología de Alimentos (Electiva)',//269
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3643',
            'name' => 'P. M. Crudos Pesados, Extra-Pesados y Residuales (Electiva)',//270
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4613',
            'name' => 'Introducción a la Ingeniería Ambiental (Electiva)',//271
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4623',
            'name' => 'Tratamiento de Aguas (Electiva)',//272
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4633',
            'name' => 'Tratamiento de Aguas Residuales (Electiva)',//273
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4645',
            'name' => 'Tratamiento de Desechos Sólidos (Electiva)',//274
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4653',
            'name' => 'Refinación de Petróleo I (Electiva)',//275
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4663',
            'name' => 'Refinación de Petróleo II (Electiva)',//276
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4673',
            'name' => 'Control de Procesos (Electiva)',//277
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4683',
            'name' => 'Simulación de Procesos Químicos (Electiva)',//278
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4693',
            'name' => 'Petroquímica (Electiva)',//279
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //CASOS ESPECIALES
        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL0000',
            'name' => 'Servicio Comunitario',//280
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE0000',
            'name' => 'Servicio Comunitario',//281
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 26,
            'code' => 'II0000',
            'name' => 'Servicio Comunitario',//282
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 27,
            'code' => 'IM0000',
            'name' => 'Servicio Comunitario',//283
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT0000',
            'name' => 'Servicio Comunitario',//284
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ0000',
            'name' => 'Servicio Comunitario',//285
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8212',
            'name' => 'Trabajo Especial I',//286
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5112',
            'name' => 'Trabajo Especial I',//287
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5112',
            'name' => 'Trabajo Especial I',//288
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4532',
            'name' => 'Trabajo Especial I',//289
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8223',
            'name' => 'Trabajo Especial II',//290
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5123',
            'name' => 'Trabajo Especial II',//291
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5123',
            'name' => 'Trabajo Especial II',//292
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4543',
            'name' => 'Trabajo Especial II',//293
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL52216',
            'name' => 'Entrenamiento Industrial',//294
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE81116',
            'name' => 'Entrenamiento Industrial',//295
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ47216',
            'name' => 'Entrenamiento Industrial',//296
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT52216',
            'name' => 'Entrenamiento Industrial',//297
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8128',
            'name' => 'Entrenamiento Industrial Opcional',//298
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5218',
            'name' => 'Entrenamiento Industrial Opcional',//299
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5218',
            'name' => 'Entrenamiento Industrial Opcional',//300
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4718',
            'name' => 'Entrenamiento Industrial Opcional',//301
            'credit_units' => 8,
            'status' => 'A',
        ]);

    }
}
