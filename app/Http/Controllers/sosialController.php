<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\galeri;
use App\Models\kontak;

class SosialController extends Controller
{
    public function index()
    {
        $kontak = kontak::all();
        $galeri = galeri::all();
        $artikel = Artikel::all();
        return view('pages.sosial', compact('kontak', 'galeri', 'artikel'));
    }
}
