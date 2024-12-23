<?php

namespace App\Models;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'category_id');
    }

}

