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
            'name' => 'Calculo I',
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 22,
            'code' => 'EB3112',
            'name' => 'Dibujo I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB4121',
            'name' => 'Inglés Técnico I',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6113',
            'name' => 'Lenguaje y Redacción',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6411',
            'name' => 'Actividades Complementarias',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7113',
            'name' => 'Desarrollo de Habilidad del Pensamiento I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ5113',
            'name' => 'Química General',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //SEMESTRE II
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1125',
            'name' => 'Calculo II',
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2115',
            'name' => 'Física I',
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 22,
            'code' => 'EB3122',
            'name' => 'Dibujo II',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB2115',
            'name' => 'Inglés Técnico II',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7123',
            'name' => 'Desarrollo de Habilidad del Pensamiento II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7212',
            'name' => 'Lectura Crítica',
            'credit_units' => 2,
            'status' => 'A',
        ]);



        //SEMESTRE III
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1134',
            'name' => 'Calculo III',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1213',
            'name' => 'Algebra Lineal',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2124',
            'name' => 'Física II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 21,
            'code' => 'EB2211',
            'name' => 'Laboratorio de Física',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB7133',
            'name' => 'Desarrollo de Habilidad del Pensamiento III',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5114',
            'name' => 'Circuitos Eléctricos I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2311',
            'name' => 'Iniciación Profesional',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1022',
            'name' => 'Dibujo de Máquina',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1112',
            'name' => 'Dibujo de Máquinas',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1253',
            'name' => 'Mecánica Aplicada I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2103',
            'name' => 'Físico-Química',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3121',
            'name' => 'Laboratorio de Química General',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3213',
            'name' => 'Química Analítica',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //SEMESTRE IV
        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1144',
            'name' => 'Calculo IV',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1312',
            'name' => 'Programación',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 20,
            'code' => 'EB1154',
            'name' => 'Matemáticas Especiales',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5124',
            'name' => 'Circuitos Eléctricos II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5213',
            'name' => 'Electrometría',
            'credit_units' => 3,
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5221',
            'name' => 'Laboratorio de Electrometría',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6112',
            'name' => 'Máquinas Eléctricas I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6542',
            'name' => 'Introducción a la Administración',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1142',
            'name' => 'Mediciones Eléctricas',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1154',
            'name' => 'Electrónica I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5131',
            'name' => 'Laboratorio de Circuitos Eléctricos',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1043',
            'name' => 'Mecánica Aplicada',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4063',
            'name' => 'Termodinámica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4093',
            'name' => 'Ingeniería Química',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1263',
            'name' => 'Mecánica Aplicada II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5014',
            'name' => 'Fundamentos de Ingeniería Eléctrica',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3022',
            'name' => 'Análisis Químico Metalúrgico',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2133',
            'name' => 'Procesos Metalúrgicos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2143',
            'name' => 'Termodinámica Metalúrgica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3113',
            'name' => 'Elementos Físico-Química',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3222',
            'name' => 'Laboratorio de Química Analítica',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4113',
            'name' => 'Principios de Ingeniería Química',
            'credit_units' => 3,
            'status' => 'A',
        ]);





        //SEMESTRE V
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1013',
            'name' => 'Electrónica Analógica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3013',
            'name' => 'Teoría de Control',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 4,
            'code' => 'IE5313',
            'name' => 'Teoría Electromagnética',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6122',
            'name' => 'Máquinas Eléctricas II',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3043',
            'name' => 'Probabilidad y Estadística',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 19,
            'code' => 'EB6552',
            'name' => 'Administración de Empresas',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1123',
            'name' => 'Tecnología Electrónica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1161',
            'name' => 'Laboratorio I de Electrónica',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1183',
            'name' => 'Electrónica II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2113',
            'name' => 'Análisis de Señales',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3213',
            'name' => 'Circuitos Digitales I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4073',
            'name' => 'Fenómenos de Transporte',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2322',
            'name' => 'Plantas Industriales y Mantenimientos de Materiales',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1054',
            'name' => 'Resistencia y Ensayo de Materiales',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1273',
            'name' => 'Mecanismos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1324',
            'name' => 'Resistencia de Materiales',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1331',
            'name' => 'Ensayos de Resistencia de Materiales',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2114',
            'name' => 'Máquinas Herramientas',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3153',
            'name' => 'Termodinámica I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4013',
            'name' => 'Fenómenos de Transporte I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1134',
            'name' => 'Metalurgía Física I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2212',
            'name' => 'Metalurgía Extractiva I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1013',
            'name' => 'Fundamentos de Resistencia de Materiales',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3313',
            'name' => 'Química Orgánica I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4213',
            'name' => 'Termodinámica I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4313',
            'name' => 'Fenómenos de Transporte I',
            'credit_units' => 3,
            'status' => 'A',
        ]);






        //SEMESTRE VI
        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3023',
            'name' => 'Ingeniería Económica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1033',
            'name' => 'Circuitos Digitales I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1041',
            'name' => 'Laboratorio de Electrónica',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6134',
            'name' => 'Máquinas Eléctricas III',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6214',
            'name' => 'Materiales Eléctricos',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7113',
            'name' => 'Transmisión de Energía Eléctrica I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7514',
            'name' => 'Instalaciones Eléctricas I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1181',
            'name' => 'Laboratorio II de Electrónica',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1313',
            'name' => 'Electrónica III',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2124',
            'name' => 'Sistemas de Comunicaciones I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2213',
            'name' => 'Teoría Electromagnética',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3163',
            'name' => 'Teoría de Control',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3221',
            'name' => 'Laboratorio de Circuitos Digitales I',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL4143',
            'name' => 'Programación II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6013',
            'name' => 'Máquinas Eléctricas',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1063',
            'name' => 'Elementos de Máquina',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2014',
            'name' => 'Tecnología de Fabricación I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4003',
            'name' => 'Transferencia de Calor',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2113',
            'name' => 'Ingeniería del Trabajo',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2121',
            'name' => 'Laboratoio de Ingeniería del Trabajo',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1015',
            'name' => 'Tecnología de Materiales',
            'credit_units' => 5,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1443',
            'name' => 'Elementos de Máquinas I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2314',
            'name' => 'Metrología y Calidad',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3163',
            'name' => 'Termodinámica II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3224',
            'name' => 'Mecánica de Fluidos',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4034',
            'name' => 'Fenómenos de Transporte II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1144',
            'name' => 'Metalurgía Física II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2222',
            'name' => 'Metalurgía Extractiva II',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3233',
            'name' => 'Análisis Instrumental',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3323',
            'name' => 'Química Orgánica II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ4224',
            'name' => 'Termodinámica II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ4334',
            'name' => 'Fenómenos de Transporte II',
            'credit_units' => 4,
            'status' => 'A',
        ]);





        //SEMESTRE VII
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1054',
            'name' => 'Electrónica Industrial',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6142',
            'name' => 'Laboratorio de Máquinas Eléctricas',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7213',
            'name' => 'Análisis Sistemas Eléctricos de Potencia I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7523',
            'name' => 'Instalaciones Eléctricas II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7613',
            'name' => 'Redes Eléctricas',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2223',
            'name' => 'Radiación y Propagación',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2263',
            'name' => 'Líneas de Transmisión',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2313',
            'name' => 'Telefonía I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3121',
            'name' => 'Laboratorio I de Sistemas de Control',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3234',
            'name' => 'Microprocesadores y Microcontroladores',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3333',
            'name' => 'Instrumentación Electrónica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3183',
            'name' => 'Control Digital',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4153',
            'name' => 'Estructuras de Datos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4172',
            'name' => 'Análisis Numérico',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1223',
            'name' => 'Electrónica Industrial I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3173',
            'name' => 'Sistemas de Control en Tiempo Contínuo',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'IE6021',
            'name' => 'Laboratorio de Máquinas Eléctricas',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4031',
            'name' => 'Laboratorio de Fenómenos de Transporte',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL3034',
            'name' => 'Instrumentación y Control',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1114',
            'name' => 'Investigación de Operaciones I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1213',
            'name' => 'Control de Calidad',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1313',
            'name' => 'Planificación y Control de la Producción',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3214',
            'name' => 'Ingeniería de Costo',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1453',
            'name' => 'Elementos de Máquinas II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2234',
            'name' => 'Tecnología Mecánica I',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3234',
            'name' => 'Máquinas e Instalaciones Hidráulicas',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1053',
            'name' => 'Control de Calidad',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'EL3121',
            'name' => 'Tecnología de Fabricación II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1313',
            'name' => 'Tratamientos Térmicos',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2231',
            'name' => 'Laboratorio de Metalurgía Extractiva',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4213',
            'name' => 'Fundición',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3241',
            'name' => 'Laboratorio de Análisis Instrumental',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3332',
            'name' => 'Laboratorio de Química Orgánica',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3413',
            'name' => 'Cinética Química',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4331',
            'name' => 'Laboratorio de Fenómenos de Transporte',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4414',
            'name' => 'Operaciones Unitarias I',
            'credit_units' => 4,
            'status' => 'A',
        ]);






        //SEMESTRE VIII
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1043',
            'name' => 'Gestión de Mantenimiento',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE6314',
            'name' => 'Controles Eléctricos',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7313',
            'name' => 'Protección de Sistemas Eléctricos de Potencia',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2153',
            'name' => 'Sistemas de Comunicaciones II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2164',
            'name' => 'Redes de Computadoras',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2273',
            'name' => 'Comunicaciones Móviles',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2281',
            'name' => 'Laboratorio de Microondas',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4183',
            'name' => 'Sistemas Operativos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4333',
            'name' => 'Diseño de Sistemas de Computación',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1243',
            'name' => 'Electrónica Industrial',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3142',
            'name' => 'Laboratorio II de Sistemas de Control',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3193',
            'name' => 'Sistemas de Control en Tiempo Discreto',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3223',
            'name' => 'Ingeniería Económica',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1123',
            'name' => 'Investigación de Operaciones II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1323',
            'name' => 'Mantenimiento Industrial',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1332',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2213',
            'name' => 'Higiene y Seguridad Industrial',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM1463',
            'name' => 'Vibraciones y Balanceo',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2244',
            'name' => 'Tecnología Mecánica II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3173',
            'name' => 'Máquinas Térmicas I',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3323',
            'name' => 'Transferencia de Calor',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM4112',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4053',
            'name' => 'Soldadura',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2323',
            'name' => 'Corrosión',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3112',
            'name' => 'Metalurgía Mecánica I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4123',
            'name' => 'Ingeniería de la Soldadura',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4234',
            'name' => 'Siderúrgia',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1033',
            'name' => 'Planificación y Control de la Producción',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 8,
            'code' => 'IQ3421',
            'name' => 'Laboratorio de Termodinámica y Cinética',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4424',
            'name' => 'Operaciones Unitarios II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4513',
            'name' => 'Reactores Químicos',
            'credit_units' => 3,
            'status' => 'A',
        ]);






        //SEMESTRE IX
        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7321',
            'name' => 'Laboratorio de Protección de Sistema de Potencia',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7413',
            'name' => 'Plantas Eléctricas y Subestaciones',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2333',
            'name' => 'Telefonía II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4341',
            'name' => 'Laboratorio de Sistema de Computación',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4373',
            'name' => 'Arquitectura del Computador',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1252',
            'name' => 'Laboratorio de Electrónica Industrial',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3324',
            'name' => 'Instrumentación Industrial',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1393',
            'name' => 'Trabajo Especial II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2333',
            'name' => 'Instalaciones Industriales',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3263',
            'name' => 'Teoría de Decisiones',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3243',
            'name' => 'Proyectos Industriales',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3313',
            'name' => 'Gerencia de Recursos Humanos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3184',
            'name' => 'Máquinas Térmicas II',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM4123',
            'name' => 'Trabajo Especial II',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1223',
            'name' => 'Ensayos no Destructivos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3132',
            'name' => 'Metalurgía Mecánica II',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3111',
            'name' => 'Laboratorio Metalurgía Mecánica',
            'credit_units' => 1,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4432',
            'name' => 'Laboratorio de Operaciones Unitarias',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4523',
            'name' => 'Ingeniería de Procesos',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4552',
            'name' => 'Simulación de Operaciones y Procesos Químicos',
            'credit_units' => 2,
            'status' => 'A',
        ]);






        //SEMESTRE X
        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II24216',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM51216',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2418',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 13,
            'code' => 'IM5118',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

        



        //ELECTIVAS ELÉCTRICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3034',
            'name' => 'Instrumentación Industrial (Electiva)',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 5,
            'code' => 'IE7753',
            'name' => 'Controles Eléctricos II (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7713',
            'name' => 'Transmisión Energía Eléctrica II (Electiva)',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7723',
            'name' => 'Análisis Sistema Eléctrico de Potencia II (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7733',
            'name' => 'Técnicas de Alta Tensión (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7763',
            'name' => 'Control y Operaciones de Sistemas de Potencia (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 6,
            'code' => 'IE7743',
            'name' => 'Planificación Sistemas de Potencia (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1033',
            'name' => 'Planificación y Control de la Producción (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1053',
            'name' => 'Control de Calidad (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3013',
            'name' => 'Ingeniería de Costos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1073',
            'name' => 'Diseño de Experimentos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS ELECTRÓNICA TODAS
        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1643',
            'name' => 'Electrónica Industrial I (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1623',
            'name' => 'Análisis de Circuitos Electrónicos Asistidos por Computador (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 1,
            'code' => 'EL1633',
            'name' => 'Tópicos Especiales en Electrónica (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2633',
            'name' => 'Comunicaciones Vía Satélite (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2643',
            'name' => 'Análisis de Circuitos Electrónicos para Comunicaciones (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2653',
            'name' => 'Televisión (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2673',
            'name' => 'Ingeniería de Transmisión (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2693',
            'name' => 'Tópicos Especiales en COmunicaciones (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2683',
            'name' => 'Telefonía Móvil Celular (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 2,
            'code' => 'EL2664',
            'name' => 'Redes de Computadoras (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3624',
            'name' => 'Instrumentación Industrial (Electiva)',
            'credit_units' => 4,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3662',
            'name' => 'Controladores Lógicos Programables (Electiva)',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3683',
            'name' => 'Sistemas de Control en Tiempo Contínuo (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3653',
            'name' => 'Control de Sistemas a Eventos Discretos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3663',
            'name' => 'Controladores Lógicos Programables PLC (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3693',
            'name' => 'Sistemas de Control en Tiempo Discreto (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL3613',
            'name' => 'Tópicos Especiales en Control (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4633',
            'name' => 'Robótica (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4643',
            'name' => 'Diseño de Software (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4653',
            'name' => 'Algoritmos Genéticos y Sistemas Entrenables (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4603',
            'name' => 'Tópicos Especiales en Computación (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4693',
            'name' => 'Programación II (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4683',
            'name' => 'Diseño de Sistemas de Computación (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 3,
            'code' => 'EL4673',
            'name' => 'Arquitectura del Computador (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);




        //ELECTIVAS INDUSTRIAL
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1363',
            'name' => 'Diseño de Experimentos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1353',
            'name' => 'Gerencia de Producción (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1383',
            'name' => 'Logística Industrial (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1373',
            'name' => 'Control y Aseguramiento de la Calidad (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2133',
            'name' => 'Tópicos de Ingeniería de Métodos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2223',
            'name' => 'Elaboración de Programas de Higiéne y Seguridad (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2233',
            'name' => 'Higiéne Industrial e Ingeniería Sanitaria (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 12,
            'code' => 'II2243',
            'name' => 'Gestión Ambiental (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3123',
            'name' => 'Probabilidad y Estadística Aplicada (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3253',
            'name' => 'Finanzas Empresariales (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3323',
            'name' => 'Gerencia y Productividad (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 10,
            'code' => 'II3333',
            'name' => 'Investigación de Mercado (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);




        //ELECTIVAS MECÁNICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3253',
            'name' => 'Neumática (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM33333',
            'name' => 'Refrigeración y Aire Aoondicionado (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 15,
            'code' => 'IM3243',
            'name' => 'Sistemas Hidráulicos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1013',
            'name' => 'Tratamientos Térmicos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1023',
            'name' => 'Ensayos no Destructivos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2013',
            'name' => 'Corrosión (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4023',
            'name' => 'Fundición (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM3633',
            'name' => 'Tribología (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2433',
            'name' => 'Control Numérico (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM2413',
            'name' => 'Mantenimiento Mecánico (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS METALÚRGICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 11,
            'code' => 'II1043',
            'name' => 'Gestión de Mantenimiento (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1613',
            'name' => 'Metalografía Industrial (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT1623',
            'name' => 'Aceros Especiales (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3633',
            'name' => 'Análisis de Fallas (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 17,
            'code' => 'MT3613',
            'name' => 'Metalurgía del Mecanizado (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2613',
            'name' => 'Tratamientos de Superficie (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 16,
            'code' => 'MT2643',
            'name' => 'Concentración de Minerales (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4683',
            'name' => 'Colada Contínua (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4653',
            'name' => 'Fundición Avanzada (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4663',
            'name' => 'Materiales Refractarios (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 18,
            'code' => 'MT4673',
            'name' => 'Tecnología del Aluminio (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 14,
            'code' => 'IM3023',
            'name' => 'Tribología (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //ELECTIVAS QUÍMICA
        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3613',
            'name' => 'Química de Alimentos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3623',
            'name' => 'Introducción a la Tecnología de Alimentos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ3643',
            'name' => 'P. M. Crudos Pesados, Extra-Pesados y Residuales (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4613',
            'name' => 'Introducción a la Ingeniería Ambiental (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4623',
            'name' => 'Tratamiento de Aguas (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4633',
            'name' => 'Tratamiento de Aguas Residuales (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4645',
            'name' => 'Tratamiento de Desechos Sólidos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4653',
            'name' => 'Refinación de Petróleo I (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4663',
            'name' => 'Refinación de Petróleo II (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4673',
            'name' => 'Control de Procesos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4683',
            'name' => 'Simulación de Procesos Químicos (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 7,
            'code' => 'IQ4693',
            'name' => 'Petroquímica (Electiva)',
            'credit_units' => 3,
            'status' => 'A',
        ]);



        //CASOS ESPECIALES
        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 26,
            'code' => 'II0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 27,
            'code' => 'IM0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ0000',
            'name' => 'Servicio Comunitario',
            'credit_units' => 0,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8212',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5112',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5112',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4532',
            'name' => 'Trabajo Especial I',
            'credit_units' => 2,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8223',
            'name' => 'Trabajo Especial II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5123',
            'name' => 'Trabajo Especial II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5123',
            'name' => 'Trabajo Especial II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4543',
            'name' => 'Trabajo Especial II',
            'credit_units' => 3,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL52216',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE81116',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ47216',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT52216',
            'name' => 'Entrenamiento Industrial',
            'credit_units' => 16,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 24,
            'code' => 'IE8128',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 23,
            'code' => 'EL5218',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 28,
            'code' => 'MT5218',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

        DB::table('subjects')->insert([
            'departmentsectionid' => 25,
            'code' => 'IQ4718',
            'name' => 'Entrenamiento Industrial Opcional',
            'credit_units' => 8,
            'status' => 'A',
        ]);

    }
}
