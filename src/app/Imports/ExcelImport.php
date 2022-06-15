<?php

namespace App\Imports;

use App\Models\FileExcell;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ExcelImport implements ToModel, WithCalculatedFormulas
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function model(array $row)
    {
        if (!isset($row[2])) {
            return null;
        }
        return new FileExcell([
            'stt' => $row[0],
            'truong_tieu_hoc' => $row[1],
            'quan_huyen' => $row[2],
            // 'ma_hoc_sinh' => $row[3],
            'ma_hoc_sinh' => preg_replace("/[\n\r]/", "", $row[3]),
            'lop' => $row[4],
            'ho_va_ten' => $row[5],
            'ngay' => $row[6],
            'thang' => $row[7],
            'nam' => $row[8],
            'gt' => $row[9],
            'noi_sinh' => $row[10],
            'dan_toc' => $row[11],
            'ho_khau_thuong_chu' => $row[12],
            'dien_thoai' => $row[13],
            'class1' => $row[14],
            'class2' => $row[15],
            'class3' => $row[16],
            'class4' => $row[17],
            'class5' => $row[18],
            'classAll' => $row[19],
            'diem_uu_tien' => $row[20],
            'diem_so_tuyen' => $row[21],
            'ghi_chu' => $row[22]
        ]);
    }
}
