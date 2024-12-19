<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HarapanKulitKepala extends Model
{
    use HasFactory;
    protected $table = 'harapan_kulit_kepalas';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
