<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchParticipationStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//مر احل المشاركة البحثية
        Schema::create('research_participation_stages', function (Blueprint $table) {
           // $table->integer('stage-no')->primary();
           $table->id();//: رقم المرحلة،

            $table->string('stage_name');//اسم المرحلة
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
        Schema::dropIfExists('research_participation_stages');
    }
}
