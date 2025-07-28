<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{

    protected $table = 'artikels';

    protected $fillable = [
        'title',
        'content',
        'slug',
        'media',
        'published_at',
    ];

    protected $dates = [
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime', // Cast sebagai datetime
    ];

    public $timestamps = true;
}
