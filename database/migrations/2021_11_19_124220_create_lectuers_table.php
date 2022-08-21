<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectuers', function (Blueprint $table) {
          //  $table->integer('lesson-no')->primary();
          $table->id();

            $table->integer('course_id');
            $table->integer('participant_id');
            $table->dateTime('date');
            $table->string('img');
            $table->string('vedio');
            $table->string('pdf');
            $table->text('txt');
            $table->softDeletes();


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
        Schema::dropIfExists('lectuers');
    }
}
