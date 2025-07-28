<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $table = 'profils';

    protected $fillable = [
        'title',
        'description',
    ];


    public $timestamps = true;
}
