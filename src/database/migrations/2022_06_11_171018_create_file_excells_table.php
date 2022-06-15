<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileExcellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_excells', function (Blueprint $table) {
            $table->string('stt')->nullable();
            $table->string('truong_tieu_hoc')->nullable();
            $table->string('quan_huyen')->nullable();
            $table->string('ma_hoc_sinh')->nullable();
            $table->string('lop')->nullable();
            $table->string('ho_va_ten')->nullable();
            $table->string('ngay')->nullable();
            $table->string('thang')->nullable();
            $table->string('nam')->nullable();
            $table->string('gt')->nullable();
            $table->string('noi_sinh')->nullable();
            $table->string('dan_toc')->nullable();
            $table->string('ho_khau_thuong_chu')->nullable();
            $table->string('dien_thoai')->nullable();
            $table->string('class1')->nullable();
            $table->string('class2')->nullable();
            $table->string('class3')->nullable();
            $table->string('class4')->nullable();
            $table->string('class5')->nullable();
            $table->string('classAll')->nullable();
            $table->string('diem_uu_tien')->nullable();
            $table->string('diem_so_tuyen')->nullable();
            $table->string('ghi_chu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_excells');
    }
}
