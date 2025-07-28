<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\galeri;
use App\Models\Kependudukan;
use App\Models\Kontak;
use App\Models\Profil;
use App\Models\struktur;

class HomeController extends Controller {

    public function index()
    {
        // Ambil semua data dari tabel 'kontaks'
        $kontak = Kontak::all();
        $profil = Profil::all();
        $struktur = struktur::all();
        $artikel = Artikel::all();
        $galeri = galeri::all();
        $jumlahKependudukan = Kependudukan::count();

        // Kirim data ke view 'home'
        return view('home', compact('kontak', 'profil', 'struktur', 'artikel', 'galeri', 'jumlahKependudukan'));
    }


    public function galeri()
    {
        $galeri = galeri::all();
        $kontak = Kontak::all();
        return view('pages.galeri', compact('galeri', 'kontak'));
    }
}
