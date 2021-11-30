<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_offers', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();//Código asignatura (clave foránea)
            $table->string('lapse')->nullable();//Lapso
            $table->string('sections')->nullable();//Secciones
            $table->integer('inscribed')->nullable();//Número de Inscritos
            $table->integer('teacher_dni')->nullable();//Cédula del profesor
            $table->string('record')->nullable();//Acta
            $table->integer('top_cup')->nullable();// Total de cupos
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
        Schema::dropIfExists('academic_offers');
    }
}
