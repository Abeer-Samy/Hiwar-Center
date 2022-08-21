<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//شهادات التدريب
        Schema::create('training_certificates', function (Blueprint $table) {
            $table->id();// رقم الشهادة،

            //$table->integer('certificate-no')->primary();
            $table->string('subscription_type');//وع االشتراك
            $table->integer('course_id');//رقم الدورة،forgin key for course table
            $table->integer('diploma_id');//رقم الدبلوم forgin key for courses_diplomas table
            $table->string('photo_certificate');//صورة  الشهادة.
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
        Schema::dropIfExists('training_certificates');
    }
}
