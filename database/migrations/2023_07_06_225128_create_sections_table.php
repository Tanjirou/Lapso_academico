<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacherid')->nullable();
            $table->unsignedBigInteger('structure_sectionid')->nullable();
            $table->unsignedBigInteger('academic_lapseid')->nullable();
            $table->unsignedBigInteger('subjectid')->nullable();
            $table->string('section_number');
            $table->char('status',1)->default('A');
            $table->foreign('teacherid')->references('id')->on('teachers');
            $table->foreign('structure_sectionid')->references('id')->on('structure_sections');
            $table->foreign('academic_lapseid')->references('id')->on('academic_lapses');
            $table->foreign('subjectid')->references('id')->on('subjects');
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
        Schema::dropIfExists('sections');
    }
}
