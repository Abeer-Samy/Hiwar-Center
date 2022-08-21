<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//خالة الفعالية
        Schema::create('event_statuses', function (Blueprint $table) {
            $table->id();//رقم حالة الفعالية
            $table->string('eventStatusType');//نوع حالة الفعالية
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
        Schema::dropIfExists('event_statuses');
    }
}
