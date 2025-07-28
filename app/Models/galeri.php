<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeris';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public $timestamps = true;
}
