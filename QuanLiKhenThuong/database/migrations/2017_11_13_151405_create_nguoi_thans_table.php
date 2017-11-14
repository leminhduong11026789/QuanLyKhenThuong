<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNguoiThansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_thans', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('nhanvien_id')->nullable()->unsigned();
            $table->text('hoten',255);
            $table->timestamp('ngaysinh')->nullable();
            $table->integer('gioitinh')->nullable();
            $table->text('email',255)->nullable();
            $table->text('dantoc',255)->nullable();
            $table->text('tongiao',255)->nullable();
            $table->text('so_cmnd',20)->nullable();
            $table->timestamp('ngaycap')->nullable();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nhanvien_id')->references('id')->on('nhan_viens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nguoi_thans');
    }
}
