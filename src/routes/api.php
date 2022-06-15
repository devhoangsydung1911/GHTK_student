<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/** Client send File */
Route::post('/import-file', 'FileController@importFile');
Route::post('/search-data', 'FileController@searchData');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
