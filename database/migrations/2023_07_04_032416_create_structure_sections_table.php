<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructureSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjectid')->unique();
            $table->unsignedBigInteger('department_sectionid');
            $table->integer('average_students');
            $table->integer('number_section');
            $table->char('status')->default('A');
            $table->foreign('subjectid')->references('id')->on('subjects');
            $table->foreign('department_sectionid')->references('id')->on('department_sections');
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
        Schema::dropIfExists('structure_sections');
    }
}
