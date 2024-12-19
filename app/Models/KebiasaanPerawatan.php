<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KebiasaanPerawatan extends Model
{
    use HasFactory;

    protected $table = 'kebiasaan_perawatans';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
