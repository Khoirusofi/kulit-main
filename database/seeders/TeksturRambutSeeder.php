<?php

namespace Database\Seeders;

use App\Models\TeksturRambut;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeksturRambutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['nama' => 'Rambut Lurus', 'deskripsi' => 'Lurus'],
            ['nama' => 'Rambut Bergelombang', 'deskripsi' => 'Bergelombang'],
            ['nama' => 'Rambut Keriting', 'deskripsi' => 'Keriting'],
            ['nama' => 'Rambut Keriting Ikal', 'deskripsi' => 'Ikal'],
        ];

        foreach ($data as $item) {
            $factoryData = TeksturRambut::factory()->make()->toArray();
            TeksturRambut::create(array_merge($item, ['foto' => $factoryData['foto']]));
        }
    }
}
