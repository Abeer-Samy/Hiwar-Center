<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraverseFileStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//حالات المشاركة
        Schema::create('traverse_file_statuses', function (Blueprint $table) {
         //   $table->integer('case-no')->primary();
            $table->id();//رقم الحالة
            $table->string('case_type');//سم الحالة.
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
        Schema::dropIfExists('traverse_file_statuses');
    }
}
