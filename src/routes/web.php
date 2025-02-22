<?php

use App\Http\Controllers\QrcodeConversionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input', [QrcodeConversionController::class, 'input'])->name('input');
Route::get('/show', [QrcodeConversionController::class, 'show'])->name('show');
