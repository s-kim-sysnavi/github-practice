<?php

use App\Http\Controllers\QrcodeConversionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrGeneratorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr', [QrGeneratorController::class, 'index']);
Route::post('/qr', [QrGeneratorController::class, 'generate'])->name('generate.qr');

Route::get('/input', [QrcodeConversionController::class, 'input'])->name('input');
Route::get('/show', [QrcodeConversionController::class, 'show'])->name('show');
