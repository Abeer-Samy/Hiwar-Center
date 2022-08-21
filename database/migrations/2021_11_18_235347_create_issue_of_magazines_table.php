<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssueOfMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//أعداد المجلة
        Schema::create('issue_of_magazines', function (Blueprint $table) {
            $table->id();//رقم العدد،
          //  $table->integer('issue-no');
            $table->string('issue_title');
            $table->integer('issue_serial_no');//الرقم التسلسلي للعدد
            $table->string('issue_img');
            $table->date('issue_date');//صورة العدد
            $table->string('pdf');
            $table->string('particants');//،المشاركون،
            $table->string('edited');//تحرير
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
        Schema::dropIfExists('issue_of_magazines');
    }
}
