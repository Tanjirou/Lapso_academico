<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporaryTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporary_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sectionid');
            $table->unsignedBigInteger('studentid');
            $table->unsignedBigInteger('studentcurriculum')->nullable();
            $table->string('teacher_dni');
            $table->string('qualification');
            $table->char('status',1)->default('A');
            $table->foreign('sectionid')->references('id')->on('sections');
            $table->foreign('studentid')->references('id')->on('students');
            $table->foreign('studentcurriculum')->references('id')->on('academic_curricula');
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
        Schema::dropIfExists('temporary_tables');
    }
}
