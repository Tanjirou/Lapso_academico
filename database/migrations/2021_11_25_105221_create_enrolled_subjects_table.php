<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolledSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('record')->nullable();//Acta
            $table->string('lapse')->nullable();//Lapso academico Primary Key
            $table->string('course')->nullable();//Carrera Clave Fóranea
            $table->string('student_record')->nullable();//Cédula del estudiante
            $table->integer('qualification')->nullable();//Calificación
            $table->string('aff_index')->nullable();// Asignatura afecta indice?
            $table->string('status')->nullable();//Estatus del alumno
            $table->string('section')->nullable();//Section
            $table->string('c_status_note')->nullable();//Condición del estatus de la nota
            $table->date('date')->nullable(); //Fecha de inscripción
            $table->string('includes')->nullable();//Marca de proceso de inscripción
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolled_subjects');
    }
}
