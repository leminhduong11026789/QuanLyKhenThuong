<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateXasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xas', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->text('ten',255);
            $table->integer('huyen_id')->nullable()->unsigned();
            $table->text('mota')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('huyen_id')->references('id')->on('huyens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('xas');
    }
}
