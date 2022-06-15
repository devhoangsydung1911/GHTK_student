<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\FileExcell;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FileController extends Controller
{
    public function importFile(Request $request)
    {
        if ($request->has('fileExcel')) {
            FileExcell::truncate();
            $fileExcel = $request->fileExcel;
            Excel::import(new ExcelImport(), $fileExcel);
        }
    }

    public function searchData(Request $request)
    {
        if ($request->has('studentPost')) {
            if (!empty($request->studentPost['id'])) {
                $id = trim($request->studentPost['id']);
                $resultId = FileExcell::where("ma_hoc_sinh", "like", '%' . $id . '%')->get();
                return response()->json($resultId);
            } else {
                $name = trim($request->studentPost['name']);
                if (!empty($name)) {
                    $resultName = FileExcell::where("ho_va_ten", "like", "%" . $name . "%")->get();
                    return response()->json($resultName);
                }
                return;
            }
        }
    }
}
