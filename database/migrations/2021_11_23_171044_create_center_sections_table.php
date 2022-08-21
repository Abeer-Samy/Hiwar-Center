<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_sections', function (Blueprint $table) {
            $table->id();
             //$table->integer('section-no')->primary();//رقم القسم،
             $table->string('section_name');//اسم القسم
             $table->longText('brief_summery');//نبذة مختصر
             $table->integer('center_id');//forgin key from center table
             $table->string('meaningful_pic');//صورة معبرة.
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
        Schema::dropIfExists('center_sections');
    }
}
