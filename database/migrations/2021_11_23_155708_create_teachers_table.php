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
            $table->bigInteger('userid')->unsigned();
            $table->unsignedBigInteger('departmentid');
            $table->string('college_degree')->nullable();
            $table->char('status');
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('departmentid')->references('id')->on('departments');
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
