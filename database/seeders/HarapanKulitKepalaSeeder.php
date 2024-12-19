<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HarapanKulitKepala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HarapanKulitKepalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Kadar Minyak Berkurang','deskripsi' => 'Kerontokan Berkurang'],
            ['nama' => 'Gatal/Perih/Iritasi Berkurang','deskripsi' => 'Gatal/Perih/Iritasi Berkurang'],
            ['nama' => 'Ketombe Berkurang','deskripsi' => 'Ketombe Berkurang'],
            ['nama' => 'Kerontokan Rambut Berkurang','deskripsi' => 'Kerontokan Rambut Berkurang'],
        ];

        foreach ($data as $item) {
            HarapanKulitKepala::create($item);
        }
    }
}
