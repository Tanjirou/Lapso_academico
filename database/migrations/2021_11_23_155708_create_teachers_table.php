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
            $table->bigInteger('user_dni')->unsigned();
            $table->unsignedBigInteger('teacher_type_id');
            $table->unsignedBigInteger('departament_id');
            $table->string('undergraduate_title')->nullable();//Titulo de pregrado
            $table->string('undergraduate_area')->nullable();//Area de pregrado
            $table->timestamps();
            $table->foreign('user_dni')->references('id')->on('users');
            $table->foreign('teacher_type_id')->references('id')->on('teacher_types');
            $table->foreign('departament_id')->references('id')->on('departaments');
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
