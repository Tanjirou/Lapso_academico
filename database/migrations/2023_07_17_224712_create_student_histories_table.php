<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentid');
            $table->unsignedBigInteger('subjectid');
            $table->string('academic_lapse');
            $table->string('qualification');
            $table->char('status',1)->default('A');
            $table->foreign('studentid')->references('id')->on('students');
            $table->foreign('subjectid')->references('id')->on('subjectid');
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
        Schema::dropIfExists('student_histories');
    }
}
