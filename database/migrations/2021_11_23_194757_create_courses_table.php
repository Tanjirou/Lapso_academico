<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();//Código asignatura (clave primaria)
            $table->string('name')->nullable();//Nombre asignatura
            $table->integer('credit_units')->nullable();//Unidades de credito
            $table->integer('theoretical_hours')->nullable();//Horas teóricas
            $table->integer('practical_hours')->nullable();//Horas prácticas
            $table->integer('laboratory_hours')->nullable();//Horas de laboratorio
            $table->string('section_code')->nullable();//Código de la sección (Clave foránea)
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
        Schema::dropIfExists('courses');
    }
}
