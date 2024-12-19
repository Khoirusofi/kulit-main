<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KetebalanRambut>
 */
class KetebalanRambutFactory extends Factory
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
            'deskripsi' => $this->faker->sentence(),
            'foto' => function () {
            $image = $this->faker->image(storage_path('app/public/ketebalan_images'), 640, 480, 'ketebalan', false);
            return 'ketebalan_images/' . $image;
            },
        ];
    }
}