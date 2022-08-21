<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//محتويات العدد
        Schema::create('issue_contents', function (Blueprint $table) {
            $table->id();//رقم المحتوى

          //  $table->integer('content-no')->primary();
            $table->string('title');
            $table->string('author');
            $table->longText('subject');
            $table->integer('issue_id');//forgin key issu magazine   رقم العدد
            $table->string('image');
            $table->string('pfd');
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
        Schema::dropIfExists('issue_contents');
    }
}
