<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mobilBaherindo extends Model
{
    protected $fillable = [
        'namaMobil',
        'hargaMobil',
        'tahunMobil',
        'kmMobil',
        'gambarMobil'
    ];
}
