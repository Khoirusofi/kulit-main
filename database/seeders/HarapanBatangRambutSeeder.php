<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HarapanBatangRambut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HarapanBatangRambutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Menambah Jumlah Rambut','deskripsi' => 'Kerontokan Berkurang'],
            ['nama' => 'Rambut Lebih Lembut dan Mudah Diatur','deskripsi' => 'Rambut Lebih Lembut dan Mudah Diatur'],
            ['nama' => 'Rambut Lebih Kuat dan Tidak Mudah Patah','deskripsi' => 'Rambut Lebih Kuat dan Tidak Mudah Patah'],
            ['nama' => 'Rambut Lebih Berkilau','deskripsi' => 'Rambut Lebih Berkilau'],
        ];

        foreach ($data as $item) {
            HarapanBatangRambut::create($item);
        }
    }
}
