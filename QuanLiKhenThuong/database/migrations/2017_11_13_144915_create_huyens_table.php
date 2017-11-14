<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHuyensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huyens', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->text('ten',255);
            $table->integer('tinh_id')->nullable()->unsigned();
            $table->text('mota')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tinh_id')->references('id')->on('tinhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('huyens');
    }
}
