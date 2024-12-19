<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KondisiRambut extends Model
{
    use HasFactory;

    protected $table = 'kondisi_rambuts';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
