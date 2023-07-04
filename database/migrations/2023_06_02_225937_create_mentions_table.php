<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('mentions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subjectid');
            $table->unsignedBigInteger('academic_curriculaid');
            $table->string('name')->nullable();
            $table->string('pre_req')->nullable();
            $table->string('post_req')->nullable();
            $table->char('status')->default('A');
            $table->foreign('subjectid')->references('id')->on('departments');
            $table->foreign('academic_curriculaid')->references('id')->on('academic_curricula');
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
        Schema::dropIfExists('mentions');
    }
}
