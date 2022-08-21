<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//دراسات
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('origititle');//العنوان األصلي
            $table->string('title');//العنوان المترجم
            $table->longText('content_brief');//المحتوى مختصر
            $table->string('imge');//صورة،
            $table->string('publish_house');//دار النشر
            $table->integer('year_publication');//سنة النشر
            $table->integer('section_id');//رقم القسم forgin key from type section table
            $table->integer('specialization_id');//forgin key spec 
            $table->integer('study_type_id');//forgin key from type_study table
            $table->string('pdf');
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
        Schema::dropIfExists('studies');
    }
}
