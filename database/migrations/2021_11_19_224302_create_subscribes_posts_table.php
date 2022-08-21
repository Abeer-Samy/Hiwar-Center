<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribesPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//مشاركات المشتركين
        Schema::create('subscribes_posts', function (Blueprint $table) {
           // $table->integer('participation-subscriber-no')->primary();
           $table->id();//رقم المشاركة_المشترك

            $table->string('subject');//الموضوع،
            $table->string('title');//العنوان،
            $table->integer('subscriber_id');//رقم المشترك forgin key for subscribers table
            $table->integer('participation_status_id');//رقم حالة المشاركة//forgin key for traverse_file_status table  
            $table->integer('participation_stage_id');//رقم مرحلة المشاركة. forgin key for research_participation_stages table
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
        Schema::dropIfExists('subscribes_posts');
    }
}
