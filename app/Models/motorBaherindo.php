<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class motorBaherindo extends Model
{
    protected $fillable = [
        'namaMotor',
        'hargaMotor',
        'tahunMotor',
        'kmMotor',
        'gambarMotor'
    ];
}
