<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('sesi.index');
});

Route::get('/sesi', [SessionController::class,'index'])->name('sesi.index');
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/sesi/register', [SessionController::class,'register']);
Route::post('/sesi/create', [SessionController::class,'create']);

Route::resource('pelamar', PelamarController::class);
Route::get('/dashboard', [PelamarController::class, 'dashboard'])->name('dashboard');
Route::get('pelamar/download/pdf',[PelamarController::class, 'cetakPdf']);

Route::resource('kriteria', KriteriaController::class);

Route::resource('alternatif', AlternatifController::class);

Route::resource('normalisasi', NormalisasiController::class);

Route::resource('hasil', HasilController::class);
Route::get('hasil/download/pdf',[HasilController::class, 'cetakPdf']);
