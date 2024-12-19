<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KulitKepala extends Model
{
    use HasFactory;

    protected $table = 'kulit_kepalas';
    protected $fillable = [
        'nama',
        'deskripsi',
        'kata',
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'kulit_kepalas_id');
    }
}
