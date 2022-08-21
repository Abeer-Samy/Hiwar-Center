<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesDiplomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {// -دورات ودبلومات
        Schema::create('courses_diplomas', function (Blueprint $table) {
            $table->id();//رقم دبلوم_دور
           // $table->integer('diploma-no')->primary();
            $table->integer('courseMaterial_id');//forgin key from course and material
            $table->boolean('deploma_id');
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
        Schema::dropIfExists('courses_diplomas');
    }
}
