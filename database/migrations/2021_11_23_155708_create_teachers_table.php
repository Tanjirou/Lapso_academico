<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user')->unsigned();
            $table->string('undergraduate_title')->nullable();//Titulo de pregrado
            $table->string('undergraduate_area')->nullable();//Area de pregrado
            $table->string('undergraduate_inst')->nullable();//Instituto de pregrado
            $table->string('undergraduate_country')->nullable();//País donde lo realizó
            $table->string('type_postgraduate')->nullable();//Tipo de postgrado
            $table->string('type_area')->nullable();//Tipo del area del postgrado
            $table->string('postgraduate_inst')->nullable();//Insituto del postgrado
            $table->string('postgraduate_country')->nullable();//País del postgrado
            $table->integer('postgraduate_completed')->nullable();//Postgrado terminado
            $table->integer('postgraduate_studies')->nullable();//Estudios del postgrado
            $table->integer('postgraduate_thesis_missing')->nullable();//Falta tesis del postgrado
            $table->date('date_entry_public_adm')->nullable();//Fecha de ingreso a la Administración Pública
            $table->date('date_entry_unexpo')->nullable();//Fecha de ingreso a la unexpo
            $table->date('sabbatical_date')->nullable();//Fecha de licencia sabática
            $table->date('retirement_date')->nullable(); //Fecha de jubilación
            $table->string('dedication')->nullable();//Dedicacion del profesor
            $table->string('category')->nullable();//Categoría del profesor
            $table->string('condition')->nullable();//Campo condición;
            $table->string('section_code')->nullable();//Código de la sección (clave foránea)
            $table->string('assign_condition')->nullable();//Campo asigna_conc
            $table->string('assign_dict')->nullable();//Campo asigna_dict
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
        Schema::dropIfExists('teachers');
    }
}
