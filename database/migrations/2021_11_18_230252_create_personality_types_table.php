<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//نوع الشخصية:
        Schema::create('personality_types', function (Blueprint $table) {
            $table->id();
            $table->string('personality_type');
           // $table->integer('personality-type_no')->primary();// رقم نوع الشخصية
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
        Schema::dropIfExists('personality_types');
    }
}
