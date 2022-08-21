<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//-ملفات االجتياز
        Schema::create('pass_files', function (Blueprint $table) {
            $table->id();//: رقم الملف،
        //    $table->integer('file-no')->primary();
            $table->integer('course_id');//، رقم الدورة forgin key for course table
            $table->dateTime('date_subscription');//تاريخ االشتراك
            $table->string('pdf');
            $table->integer('file_status_id');//رقم حالة الملف
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
        Schema::dropIfExists('pass_files');
    }
}
