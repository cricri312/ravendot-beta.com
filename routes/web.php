<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/2d-design', function () {
    return view('2d-design');
})->name('2d-design');

Route::get('/web', function () {
    return view('web');
})->name('web');

Route::get('/code', function () {
    return view('code');
})->name('code');

Route::get('/3d-design', function () {
    return view('3d-design');
})->name('3d-design');
