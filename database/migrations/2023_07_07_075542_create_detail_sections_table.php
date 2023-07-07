<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sectionid');
            $table->unsignedBigInteger('studentid');
            $table->unsignedBigInteger('studentcurriculum')->nullable();
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
        Schema::dropIfExists('detail_sections');
    }
}
