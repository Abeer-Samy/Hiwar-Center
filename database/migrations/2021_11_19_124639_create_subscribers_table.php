<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//المشتركون
        Schema::create('subscribers', function (Blueprint $table) {
          //  $table->integer('subscriber-no')->primary();
          $table->id();//رقم المشترك

            $table->string('subscriber_name');//اسم المشترك
            $table->integer('country_id');//رقم الدولة، forgin key for conties table
            $table->string('speciality');//التخصص،
            $table->string('email');
            $table->string('phone');
            $table->string('pass');
            $table->string('confirm_pass');
            $table->string('account_type');
            $table->string('cv');
            $table->string('pdf_cv');
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
        Schema::dropIfExists('subscribers');
    }
}
