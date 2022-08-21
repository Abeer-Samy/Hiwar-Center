<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeOfVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//نوع اإلصدارات
        Schema::create('type_of_versions', function (Blueprint $table) {
            $table->id();
           // $table->integer('version-type-no')->primary();//رقم نو ع اإلصدار
            $table->string('version_type');//نوع اإلصدار
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
        Schema::dropIfExists('type_of_versions');
    }
}
