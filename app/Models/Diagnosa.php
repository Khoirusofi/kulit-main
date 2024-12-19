<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diagnosa extends Model
{
    use HasFactory;

    protected $table = 'diagnosas';

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'email',
        'jenis_kelamin',
        'usia',
        'kulit_kepalas_id',
        'proses_kimias_id',
        'tekstur_rambuts_id',
        'ketebalan_rambuts_id',
        'kondisi_rambuts_id',
        'kebiasaan_perawatans_id',
        'penggunaan_stylings_id',
        'harapan_kulit_kepalas_id',
        'harapan_batang_rambuts_id',
    ];

     public function kulitKepala()
     {
         return $this->belongsTo(KulitKepala::class, 'kulit_kepalas_id');
     }

     public function prosesKimia()
     {
         return $this->belongsTo(ProsesKimia::class, 'proses_kimias_id');
     }

     public function teksturRambut()
     {
         return $this->belongsTo(TeksturRambut::class, 'tekstur_rambuts_id');
     }

     public function ketebalanRambut()
     {
         return $this->belongsTo(KetebalanRambut::class, 'ketebalan_rambuts_id');
     }

     public function kondisiRambut()
     {
         return $this->belongsTo(KondisiRambut::class, 'kondisi_rambuts_id');
     }

     public function kebiasaanPerawatan()
     {
         return $this->belongsTo(KebiasaanPerawatan::class, 'kebiasaan_perawatans_id');
     }

     public function penggunaanStyling()
     {
         return $this->belongsTo(PenggunaanStyling::class, 'penggunaan_stylings_id');
     }

     public function harapanKulitKepala()
     {
         return $this->belongsTo(HarapanKulitKepala::class, 'harapan_kulit_kepalas_id');
     }

     public function harapanBatangRambut()
     {
         return $this->belongsTo(HarapanBatangRambut::class, 'harapan_batang_rambuts_id');
     }

     public function produk()
    {
        return $this->belongsToMany(Produk::class, 'diagnosa_produk', 'diagnosa_id', 'produk_id');
    }

}
