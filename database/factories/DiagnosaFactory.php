<?php

namespace Database\Factories;

use App\Models\Produk;
use App\Models\Category;
use App\Models\KulitKepala;
use App\Models\ProsesKimia;
use App\Models\KondisiRambut;
use App\Models\TeksturRambut;
use App\Models\KetebalanRambut;
use App\Models\PenggunaanStyling;
use App\Models\HarapanKulitKepala;
use App\Models\KebiasaanPerawatan;
use App\Models\HarapanBatangRambut;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnosa>
 */
class DiagnosaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kulitKepalaId = KulitKepala::inRandomOrder()->first()?->id;
        $prosesKimiaId = ProsesKimia::inRandomOrder()->first()?->id;
        $teksturRambutId = TeksturRambut::inRandomOrder()->first()?->id;
        $ketebalanRambutId = KetebalanRambut::inRandomOrder()->first()?->id;
        $kondisiRambutId = KondisiRambut::inRandomOrder()->first()?->id;
        $kebiasaanPerawatanId = KebiasaanPerawatan::inRandomOrder()->first()?->id;
        $penggunaanStylingId = PenggunaanStyling::inRandomOrder()->first()?->id;
        $harapanKulitKepalaId = HarapanKulitKepala::inRandomOrder()->first()?->id;
        $harapanBatangRambutId = HarapanBatangRambut::inRandomOrder()->first()?->id;

        $produkIds = Produk::where('kulit_kepalas_id', $kulitKepalaId)
            ->pluck('id')
            ->toArray();

        $produkIds = !empty($produkIds) ? $produkIds : Produk::inRandomOrder()->take(3)->pluck('id')->toArray(); // Pilih 3 produk secara acak jika tidak ada produk yang cocok

        return [
            'nama' => $this->faker->name,
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'usia' => $this->faker->numberBetween(18, 30),
            'kulit_kepalas_id' => $kulitKepalaId,
            'proses_kimias_id' => $prosesKimiaId,
            'tekstur_rambuts_id' => $teksturRambutId,
            'ketebalan_rambuts_id' => $ketebalanRambutId,
            'kondisi_rambuts_id' => $kondisiRambutId,
            'kebiasaan_perawatans_id' => $kebiasaanPerawatanId,
            'penggunaan_stylings_id' => $penggunaanStylingId,
            'harapan_kulit_kepalas_id' => $harapanKulitKepalaId,
            'harapan_batang_rambuts_id' => $harapanBatangRambutId,
        ];
    }
}
