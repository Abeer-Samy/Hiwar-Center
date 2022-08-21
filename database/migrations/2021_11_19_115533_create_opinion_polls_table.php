<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionPollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//استطقئع الرأي
        Schema::create('opinion_polls', function (Blueprint $table) {
            $table->id();

        //    $table->integer('poll-no')->primary();//رقم االستطالع
            $table->string('question');//السؤال،
            $table->dateTime('start_date');//لتاريخ البدء
            $table->dateTime('poll_end_date');// تاريخ نهاية االستطالع
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
        Schema::dropIfExists('opinion_polls');
    }
}
