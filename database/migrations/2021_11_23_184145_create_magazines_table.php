<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//المجلة
        Schema::create('magazines', function (Blueprint $table) {
            $table->id();
            $table->string('magazine_title');
            $table->string('img');
            $table->longText('brief_discption');// وصف مختصر
            $table->integer('standard_id');//، الرقم المعياري
            $table->string('release');//تحرير
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
        Schema::dropIfExists('magazines');
    }
}
