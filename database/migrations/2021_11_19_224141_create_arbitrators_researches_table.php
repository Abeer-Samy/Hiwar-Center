<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArbitratorsResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//المحكمين_األبحاث
        Schema::create('arbitrators_researches', function (Blueprint $table) {
         //   $table->integer('arbitrators_research-no')->primary();
         $table->id();

            $table->integer('participant_participation_id');//رقم مشاركات المشتركين //forgin key for subscribes_posts table 
            $table->integer('subscriber_id');// رقم المشترك )المحكم(//forgin key for subscribers
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
        Schema::dropIfExists('arbitrators_researches');
    }
}
