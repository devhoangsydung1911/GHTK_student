<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileExcell extends Model
{
    protected $fillable =  [
        "stt",
        "truong_tieu_hoc",
        "quan_huyen",
        "ma_hoc_sinh",
        "lop",
        "ho_va_ten",
        "ngay",
        "thang",
        "nam",
        "gt",
        "noi_sinh",
        "dan_toc",
        "ho_khau_thuong_chu",
        "dien_thoai",
        "class1",
        "class2",
        "class3",
        "class4",
        "class5",
        "classAll",
        "diem_uu_tien",
        "diem_so_tuyen",
        "ghi_chu",
    ];

    public $timestamps = false;
}
