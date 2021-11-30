<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensums', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();//Código de asignatura clave fóranea
            $table->string('career')->nullable();//Código de carrera    clave fóranea
            $table->string('semester')->nullable();//Semestre
            $table->string('credit_units')->nullable();//Unidades de crédito
            $table->string('subject_precondition1')->nullable();//Código de prerequisito 1
            $table->string('subject_precondition2')->nullable();//Código de prerequisito 2
            $table->string('subject_precondition3')->nullable();//Código de prerequisito 3
            $table->string('subject_precondition4')->nullable();//Código de prerequisito 4
            $table->string('subject_precondition5')->nullable();//Código de prerequisito 5
            $table->string('cred_units_required')->nullable();//Unidades de crédito requeridas
            $table->string('corequisite_code1')->nullable();//Código de correquisito 1
            $table->string('corequisite_code2')->nullable();//Código de correquisito 2
            $table->string('corequisite_code3')->nullable();//Código de correquisito 3
            $table->integer('obligatory')->nullable(); //Asignatura obligatoria
            $table->integer('elective')->nullable(); //Materia electiva
            $table->string('chain_rep')->nullable();
            $table->string('lapse')->nullable();//Lapso académico
            $table->string('pensum')->nullable(); //pensum académico
            $table->string('mention')->nullable(); //Mención
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
        Schema::dropIfExists('pensums');
    }
}
