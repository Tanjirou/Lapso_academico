<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->unsigned();
            $table->string('proceedings');//Expediente (clave primaria)
            $table->string('enrollment_lapse')->nullable();//Lapso inscripcion
            $table->string('career'); //Codigo de carrera (clave foránea)
            $table->string('c_entry')->nullable();//Campo c_ingreso
            $table->decimal('u_approved_credit', $precision = 10, $scale = 0)->nullable(); //Unidades de creditos aprobados
            $table->decimal('enrolled_credit_units', $precision = 10, $scale = 0)->nullable();//Unidades de credito inscritas
            $table->decimal('u_c_p_index', $precision = 10, $scale = 0)->nullable();//Campo u_c_p_indice
            $table->decimal('academic_index', $precision = 10, $scale = 2)->nullable();//Indice académico
            $table->decimal('performance_index', $precision = 10, $scale = 2)->nullable();//Indice de rendimiento
            $table->smallInteger('conduct')->nullable();//Campo conducta
            $table->string('semester')->nullable();//Semestre
            $table->string('pensum')->nullable();//Pensum
            $table->date('grade_date')->nullable();//Fecha de grado
            $table->decimal('lapse_index', $precision = 10, $scale = 2)->nullable();//Indice acumulado hasta el lapso
            $table->string('specialty_mention')->nullable();//Mención de la especialidad
            $table->integer('c_institute')->nullable();//Código del instituto de procedencia
            // $table->string('edo_nace_e')->nullable();//Estado de nacimiento
            $table->decimal('u_cred_course_lapse', $precision = 10, $scale = 0)->nullable();//Unidades de creditos cursadas en el lapso
            $table->string('last_load')->nullable();//Última carga
            $table->string('promotion_number')->nullable();//Número de promoción
            $table->string('grade_type')->nullable(); //Tipo de grado
            $table->timestamps();
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
