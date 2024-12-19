<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'url',
        'harga',
        'foto',
        'kulit_kepalas_id',
        'category_id',
    ];

    public function kulitKepala()
    {
        return $this->belongsTo(KulitKepala::class, 'kulit_kepalas_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function diagnosa()
    {
        return $this->belongsToMany(Diagnosa::class, 'diagnosa_produk', 'produk_id', 'diagnosa_id');
    }
}
