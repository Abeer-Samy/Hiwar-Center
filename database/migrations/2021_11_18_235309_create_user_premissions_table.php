<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPremissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//صقئحيات المستخدمون
        Schema::create('user_premissions', function (Blueprint $table) {
            $table->id();

          //  $table->integer('validity-no')->primary();//رقم الصالحية،
            $table->string('validity_type');//نوع الصالحية
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
        Schema::dropIfExists('user_premissions');
    }
}
