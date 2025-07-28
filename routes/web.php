<?php

use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\SosialController;
use Illuminate\Http\Request;
use App\Services\TextToSpeechService;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/Artikel & Blog', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');
Route::get('/Pengaduan dan aspirasi', [PengaduanController::class, 'index'])->name('pengaduan');
Route::post('/pengaduan/post', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/Administrasi dan kependudukan', [AdministrasiController::class, 'index'])->name('Administrasi');
Route::post('/administrasi/post', [AdministrasiController::class, 'store'])->name('administrasi.store');
Route::get('/Tentang Kami', [SosialController::class, 'index'])->name('sosial');

Route::post('/synthesize', function (Request $request) {
    $text = $request->input('text');
    if (empty($text)) {
        return response()->json(['error' => 'Teks tidak boleh kosong'], 400);
    }

    $service = app(TextToSpeechService::class);
    $audioContent = $service->synthesizeText($text);

    return response($audioContent)
        ->header('Content-Type', 'audio/mpeg');
});
