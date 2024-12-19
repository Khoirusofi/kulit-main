<?php

namespace Database\Seeders;

use App\Models\ProsesKimia;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProsesKimiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 'nama' => 'Natural','deskripsi' => 'Natural',],
            [ 'nama' => 'Pewarnaan','deskripsi' => 'Pewarnaan',],
            [ 'nama' => 'Highlight/Bleaching','deskripsi' => 'Highlight/Bleaching',],
            [ 'nama' => 'Keriting (Perming)','deskripsi' => 'Keriting (Perming)',],
            [ 'nama' => 'Pelurusan (Straightening)','deskripsi' => 'Pelurusan (Straightening)',],
        ];

        foreach ($data as $item) {
            ProsesKimia::create($item);
        }
    }
}
