<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("helloworld", [HelloWorldController::class,"index"]);
Route::get("ambilfile", [HelloWorldController::class,"ambilFile"]);
Route::get("getlorem", [HtmlController::class,"getLorem"]);
Route::get("table-mahasiswa", [LatihanController::class,"getTable"]);
Route::get("form-mahasiswa", [LatihanController::class,"getForm"]);