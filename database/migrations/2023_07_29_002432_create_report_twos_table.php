<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_twos', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('subject_code');
            $table->string('subject');
            $table->string('sections');
            $table->string('student_cant');
            $table->string('number_student');
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
        Schema::dropIfExists('report_twos');
    }
}
