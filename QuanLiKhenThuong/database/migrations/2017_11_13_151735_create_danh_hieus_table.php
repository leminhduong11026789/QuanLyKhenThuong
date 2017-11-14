<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDanhHieusTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_hieus', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->text('ten',255);
            $table->text('loai_danhhieu')->nullable();
            $table->double('sotien')->nullable();
            $table->integer('nam')->nullable();
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
        Schema::drop('danh_hieus');
    }
}
