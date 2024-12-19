<?php

namespace Database\Seeders;

use App\Models\KetebalanRambut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KetebalanRambutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Halus', 'deskripsi' => 'Halus'],
            ['nama' => 'Medium', 'deskripsi' => 'Medium'],
            ['nama' => 'Tebal', 'deskripsi' => 'Tebal'],
        ];

        foreach ($data as $item) {
            $factoryData = KetebalanRambut::factory()->make()->toArray();
            KetebalanRambut::create(array_merge($item, ['foto' => $factoryData['foto']]));
        }
    }
}
