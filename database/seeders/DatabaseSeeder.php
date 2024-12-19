<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KulitKepalaSeeder::class,
            ProsesKimiaSeeder::class,
            TeksturRambutSeeder::class,
            KetebalanRambutSeeder::class,
            KondisiRambutSeeder::class,
            KebiasaanPerawatanSeeder::class,
            PenggunaanStylingSeeder::class,
            HarapanKulitKepalaSeeder::class,
            HarapanBatangRambutSeeder::class,
            CategorySeeder::class,
            ProdukSeeder::class,
            DiagnosaSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Sof',
            'email' => 'sof@sof.com',
        ]);

        User::factory()->create([
            'name' => 'Erfina',
            'email' => 'erfina@erfina.com',
        ]);
    }
}
