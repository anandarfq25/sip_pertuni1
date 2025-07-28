<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{

    protected $table = 'kependudukans';

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status_pernikahan',
        'nomor_hp',
    ];
}
