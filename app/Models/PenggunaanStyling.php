<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenggunaanStyling extends Model
{
    use HasFactory;

    protected $table = 'penggunaan_stylings';

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
    ];

}
