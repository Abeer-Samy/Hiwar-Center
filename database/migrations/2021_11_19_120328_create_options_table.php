<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//الخيارات
        Schema::create('options', function (Blueprint $table) {
            $table->id();

            //$table->integer('option-no')->primary();//رقم الخيار
            $table->text('option_txt');//نص الخيار
            $table->integer('poll_id');//رقم استطالع الرأي // forgin key opinion_poll table
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
        Schema::dropIfExists('options');
    }
}
