<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KebiasaanPerawatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KebiasaanPerawatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Keramas Setiap Hari','deskripsi' => 'Keramas Setiap Hari'],
            ['nama' => 'Keramas 2-3 Hari Sekali','deskripsi' => 'Keramas 2-3 Hari Sekali'],
            ['nama' => 'Keramas Seminggu Sekali','deskripsi' => 'Keramas Seminggu Sekali'],
            ['nama' => 'Menggunakan Masker','deskripsi' => 'Menggunakan Masker'],
            ['nama' => 'Menggunakan Kondisioner','deskripsi' => 'Menggunakan Kondisioner'],
        ];

        foreach ($data as $item) {
            KebiasaanPerawatan::create($item);
        }
    }
}
