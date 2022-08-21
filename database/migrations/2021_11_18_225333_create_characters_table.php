<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//جدول الشخصيات
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

        //    $table->integer('person-no')->primary();//رقم الشخص
            $table->string('fullName');//االسم رباعي
            $table->string('phone');
            $table->string('email');
            $table->string('fax');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instgrame');
            $table->string('youtube');
            $table->string('profile_pic');//الصورة الشخصية
            $table->string('speciality');//التخصص،
            $table->string('profile');//تعريفية،
            $table->integer('personality_type_id');//forgin key from personality type table
            $table->integer('country_id')->nullable();//forgin key from countries table
            $table->integer('center_id');//forgin key from center table
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
        Schema::dropIfExists('characters');
    }
}
