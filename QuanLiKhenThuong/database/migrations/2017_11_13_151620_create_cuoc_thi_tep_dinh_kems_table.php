<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuocThiTepDinhKemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuoc_thi_tep_dinh_kems', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('cuocthi_id')->nullable()->unsigned();
            $table->text('tentep',255)->nullable();
            $table->text('url');
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
        Schema::drop('cuoc_thi_tep_dinh_kems');
    }
}
