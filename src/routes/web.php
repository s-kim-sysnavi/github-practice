<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrGeneratorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr', [QrGeneratorController::class, 'index']);
Route::post('/qr', [QrGeneratorController::class, 'generate'])->name('generate.qr');
