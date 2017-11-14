<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuocThiDoiTuongThamGiasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuoc_thi_doi_tuong_tham_gias', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('cuocthi_id')->nullable()->unsigned();
            $table->integer('doituongthamgia')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cuocthi_id')->references('id')->on('cuoc_this');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuoc_thi_doi_tuong_tham_gias');
    }
}
