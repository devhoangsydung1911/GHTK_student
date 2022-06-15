<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/{name}', function () {
    return view('mainpage');
})->where('name', '.*');
