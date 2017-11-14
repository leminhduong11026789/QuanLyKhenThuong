<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNhanViensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('user_id')->nullable()->unsigned();
            $table->text('hoten',255);
            $table->timestamp('ngaysinh')->nullable();
            $table->integer('tinh_id')->nullable()->unsigned();
            $table->integer('huyen_id')->nullable()->unsigned();
            $table->integer('xa_id')->nullable()->unsigned();
            $table->integer('gioitinh')->nullable();
            $table->text('email',255)->nullable();
            $table->text('dantoc',255)->nullable();
            $table->text('tongiao',255)->nullable();
            $table->text('so_cmnd',20)->nullable();
            $table->timestamp('ngaycap')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tinh_id')->references('id')->on('tinhs');
            $table->foreign('huyen_id')->references('id')->on('huyens');
            $table->foreign('xa_id')->references('id')->on('xas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nhan_viens');
    }
}
