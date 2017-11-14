<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuocThisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuoc_this', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->text('ten',255);
            $table->timestamp('thoihan_thamgia')->nullable();
            $table->integer('loaihinh')->nullable();
            $table->integer('bantochuc')->nullable();
            $table->integer('batbuoc')->nullable();
            $table->text('giaithuong',255)->nullable();
            $table->text('mota',255)->nullable();
            $table->string('slug');
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
        Schema::drop('cuoc_this');
    }
}
