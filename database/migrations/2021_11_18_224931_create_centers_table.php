<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('centers', function (Blueprint $table) {
            $table->id();

           // $table->integer('center-no')->primary();//رقم المركز
            $table->string('center_name');//اسم المركز
            $table->longText('brief_discrption');//وصف مختصر
            $table->string('image');//صورة،
            $table->string('vision');//الرؤية،
            $table->string('mission');//الرسالة،
            $table->text('objectives');//األهداف،
            $table->string('center_location');//مكان المركز
            $table->string('phone');
            $table->string('email');
            $table->string('fax');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instgrame');
            $table->string('youtube');
            $table->integer('country_id')->nullable();//forgin key from countries table
            $table->dateTime('date_establish');// تاريخ النشأة.
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
        Schema::dropIfExists('centers');
    }
}
