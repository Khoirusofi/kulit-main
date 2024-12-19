<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProsesKimia extends Model
{
    use HasFactory;

    protected $table = 'proses_kimias';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
