<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//اإلجابات
        Schema::create('answers', function (Blueprint $table) {
            $table->id();

         //   $table->integer('answer-no')->primary();//رقم اإلجابة
            $table->integer('poll_id');//رقم استطالع الرأي // forgin key opinion_poll table
            $table->integer('option_id');// رقم الخيار// forgin key for option table
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
        Schema::dropIfExists('answers');
    }
}
