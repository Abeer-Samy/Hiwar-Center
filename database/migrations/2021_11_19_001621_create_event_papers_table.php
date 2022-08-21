<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//أوراق الفعاليات
        Schema::create('event_papers', function (Blueprint $table) {
            $table->id();//رقم الورقة،

          //  $table->integer('paper-no')->primary();
            $table->string('title');
            $table->string('author');//الكاتب،
            $table->longText('subject');//الموضوع،
            $table->dateTime('date');
            $table->string('photo');
            $table->string('vedio');
            $table->string('location');
            $table->string('result_and_recom');//نتائج وتوصيات
            $table->integer('event_id');//رقم الفعالي forgin key    
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
        Schema::dropIfExists('event_papers');
    }
}
