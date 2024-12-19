<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HarapanBatangRambut extends Model
{
    use HasFactory;
    protected $table = 'harapan_batang_rambuts';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
