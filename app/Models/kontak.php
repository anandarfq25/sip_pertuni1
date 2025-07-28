<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table = 'kontaks';

    protected $fillable = [
        'address',
        'phone',
        'email',
        'whatsapp_url',
        'instagram_url',
        'youtube_url',
    ];


    public $timestamps = true;
}
