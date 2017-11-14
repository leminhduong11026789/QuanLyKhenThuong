<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuaTrinhCongTacsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qua_trinh_cong_tacs', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('nhanvien_id')->nullable()->unsigned();
            $table->timestamp('tu_ngay')->nullable();
            $table->timestamp('den_ngay')->nullable();
            $table->text('congviec',255)->nullable();
            $table->text('ghichu',500)->nullable();
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
        Schema::drop('qua_trinh_cong_tacs');
    }
}
