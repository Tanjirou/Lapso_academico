<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum__subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academic_curriculumid');
            $table->unsignedBigInteger('subjectsid');
            $table->string('pre_requirements')->nullable();
            $table->string('co_requisites')->nullable();
            $table->foreign('academic_curriculumid')->references('id')->on('academic_curricula');
            $table->foreign('subjectsid')->references('id')->on('subjects');
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
        Schema::dropIfExists('curriculum__subjects');
    }
}
