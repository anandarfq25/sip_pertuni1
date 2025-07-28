<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_laporan',
        'isi_laporan',
        'tanggal_kejadian',
        'lokasi_kejadian',
        'instansi_tujuan',
        'kategori',
        'lampiran',
    ];
}
