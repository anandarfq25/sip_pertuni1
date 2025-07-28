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
