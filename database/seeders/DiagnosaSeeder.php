<?php

namespace Database\Seeders;

use App\Models\Diagnosa;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Diagnosa::factory()->count(5)->create();
    }
}
