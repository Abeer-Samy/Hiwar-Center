<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//الفعاليات
        Schema::create('events', function (Blueprint $table) {
            $table->id();

          //  $table->integer('event-no')->primary();
            $table->string('title');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('image');
            $table->string('vedio');
            $table->longText('topic');
            $table->string('suggested_title');//عناوين مقترحة،
            $table->string('pdf');
            $table->integer('section_id');// رقم القسم forgin key
            $table->integer('specialization_id');//رقم التخصص forgin key q
            $table->integer('event_type_id');//رقم نوع الفعالية forgin key from type activity
            $table->string('result_and_recom');//، نتائج وتوصيات
            $table->integer('event_statuses_id');//، ر قم حالة الفعالية forgin key ? table
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
        Schema::dropIfExists('events');
    }
}
