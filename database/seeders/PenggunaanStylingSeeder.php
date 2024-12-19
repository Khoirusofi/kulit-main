<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PenggunaanStyling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenggunaanStylingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['nama' => 'Tidak Ada', 'deskripsi' => 'Tidak Ada'],
            ['nama' => 'Hair Dryer', 'deskripsi' => 'Hair Dryer'],
            ['nama' => 'Curler', 'deskripsi' => 'Curler'],
            ['nama' => 'Straightener', 'deskripsi' => 'Straightener'],
        ];

        foreach ($data as $item) {
            $factoryData = PenggunaanStyling::factory()->make()->toArray();
            PenggunaanStyling::create(array_merge($item, ['foto' => $factoryData['foto']]));
        }
    }
}
