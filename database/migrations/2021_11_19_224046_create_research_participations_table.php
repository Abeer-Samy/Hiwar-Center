<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//المشاركة البحثية
        Schema::create('research_participations', function (Blueprint $table) {
         //   $table->integer('participation-no')->primary();
         $table->id();//رقم المشاركة

            $table->string('publication_criteria');//معايير النشر
            $table->string('publication_ethics');//أخالقيات النشر
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
        Schema::dropIfExists('research_participations');
    }
}
