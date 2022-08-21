<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//الإصدارات
        Schema::create('versions', function (Blueprint $table) {
            $table->id();

           // $table->integer('version-no')->primary();//رقم اإلصدار
            $table->string('title');//عنوان اإلصدار
            $table->integer('version_type_id');// رقم نوع اإلصدار//forgin key from type of version table
            $table->longText('subject');//الموضوع،
            $table->string('imge');//صورة،
            $table->integer('character_id');//رقم الشخصية forgin key characters table
            $table->date('date'); //التاريخ،
            $table->string('referances');//المراجع،
            $table->integer('section_id');//forgin key from center_sections table
            $table->integer('specialization_id');//رقم التخصص forgin key 
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
        Schema::dropIfExists('versions');
    }
}
