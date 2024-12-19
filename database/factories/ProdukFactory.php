<?php

namespace Database\Factories;

use App\Models\HarapanKulitKepala;
use App\Models\HarapanBatangRambut;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word(),
            'deskripsi' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'harga' => $this->faker->randomFloat(2, 10, 500),
            'foto' => function () {
            $image = $this->faker->image(storage_path('app/public/produk_images'), 640, 480, 'Produk', false);
            return 'produk_images/' . $image;
            },
            'kulit_kepalas_id' => \App\Models\KulitKepala::query()->inRandomOrder()->value('id'),
            'category_id' => \App\Models\Category::query()->inRandomOrder()->value('id'),
        ];
    }
}
