<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeksturRambut extends Model
{
    use HasFactory;

    protected $table = 'tekstur_rambuts';

    protected $fillable = [
        'nama',
        'deskripsi',
        'foto',
    ];

}
