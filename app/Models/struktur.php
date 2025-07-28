<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class struktur extends Model
{
    protected $table = 'strukturs';

    protected $fillable = [
        'name',
        'position',
        'photo',
        'description',
    ];

    public $timestamps = true;
}
