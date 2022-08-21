<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//دورات ومواد
        Schema::create('courses_materials', function (Blueprint $table) {
            $table->id();//رقم الدورة
        //    $table->integer('course-no')->primary();
            $table->integer('course_type_id');// رقم نوع دور forgin key for 
            $table->string('address');//العنوان،
            $table->integer('participant_id');//رقم المشترك )المدرب(، FORGin key subscribers
            $table->string('img');
            $table->string('vedio');
            $table->string('pass_file');// ،ملف االجتياز 
            $table->string('pdf');
            $table->string('admission_req');// شروط االلتحاق
            $table->string('description');// وصف مختصر
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_materials');
    }
}
