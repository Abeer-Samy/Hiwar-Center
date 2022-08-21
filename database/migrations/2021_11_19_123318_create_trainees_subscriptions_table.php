<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//اشت اركات المتدربون:
        Schema::create('trainees_subscriptions', function (Blueprint $table) {
            $table->id();//رقم االشتراك

         //   $table->integer('subscription-no')->primary();
            $table->integer('subscriber_id');//رقم المشترك forgin key for subscribers table
            $table->string('subscription_type');// نوع االشتراك 
            $table->integer('course_id');// رقم الدو رة، forgin key for course table
            $table->integer('diploma_id');//forgin course diploma table
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
        Schema::dropIfExists('trainees_subscriptions');
    }
}
