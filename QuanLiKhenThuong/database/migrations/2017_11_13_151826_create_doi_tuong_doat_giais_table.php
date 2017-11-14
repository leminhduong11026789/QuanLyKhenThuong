<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoiTuongDoatGiaisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doi_tuong_doat_giais', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('doituong')->nullable();
            $table->text('ghichu')->nullable();
            $table->timestamp('updated_at')->nullable();
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
        Schema::drop('doi_tuong_doat_giais');
    }
}
