<?php


namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\galeri;
use App\Models\Kontak;
use App\Models\Profil;
use App\Models\struktur;

class ArtikelController extends Controller {

    public function index()
    {
        // Ambil semua data dari tabel 'kontaks'
        $kontak = Kontak::all();
        $profil = Profil::all();
        $struktur = struktur::all();
        $artikel = Artikel::all();
        $galeri = galeri::all();

        // Kirim data ke view 'home'
        return view('components.listartikel', compact('kontak', 'profil', 'struktur', 'artikel', 'galeri'));
    }

    public function show($slug)
    {
        // Cari artikel berdasarkan slug
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $galeri = galeri::all();
        $kontak = Kontak::all(); // Tetap mengambil data kontak untuk ditampilkan di header/footer

        return view('components.artikelshow', compact('artikel', 'kontak', 'galeri'));
    }


}
