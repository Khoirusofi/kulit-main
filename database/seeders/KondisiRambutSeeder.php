<?php

namespace Database\Seeders;

use App\Models\KondisiRambut;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KondisiRambutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Kering/Kaku', 'deskripsi' => 'Kering/Kaku'],
            ['nama' => 'Sulit diatur', 'deskripsi' => 'Sulit diatur'],
            ['nama' => 'Rapuh (Patah)', 'deskripsi' => 'Rapuh (Patah)'],
            ['nama' => 'Bercabang', 'deskripsi' => 'Bercabang'],
            ['nama' => 'Kusam', 'deskripsi' => 'Kusam'],
        ];

        foreach ($data as $item) {
            KondisiRambut::create($item);
        }
    }
}
