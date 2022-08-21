<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//-المستخدمون
        Schema::create('user', function (Blueprint $table) {
            $table->id();

          //  $table->integer('user-no')->primary();//رقم المستخدم،
            $table->string('user_name');//اسم المستخدم
            $table->integer('user_validation_id');// رقم صالحية المستخدم.//forgin key for user_premissions table
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
        Schema::dropIfExists('user');
    }
}
