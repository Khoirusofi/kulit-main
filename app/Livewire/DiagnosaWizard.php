<?php

namespace App\Livewire;

use App\Models\Produk;
use Livewire\Component;
use App\Models\Diagnosa;
use App\Models\KulitKepala;
use App\Models\ProsesKimia;
use App\Models\KondisiRambut;
use App\Models\TeksturRambut;
use App\Models\KetebalanRambut;
use App\Models\PenggunaanStyling;
use App\Models\HarapanKulitKepala;
use App\Models\KebiasaanPerawatan;
use App\Models\HarapanBatangRambut;

class DiagnosaWizard extends Component
{
    public $step = 1;

    // Step 1: Data Diri
    public $nama, $nomorTelepon, $email, $jenisKelamin, $usia;

    // Step 2: Kondisi Kulit Kepala
    public $kulitKepala = [];

    // Step 3: Kondisi Rambut (Tidak digunakan dalam filter produk ini)
    public $prosesKimia = [], $teksturRambut = [], $ketebalanRambut = [], $kondisiRambut = [], $kebiasaanPerawatan = [], $penggunaanStyling = [];

    // Step 4: Harapan
    public $harapanKulitKepala = [], $harapanBatangRambut = [];

    protected $listeners = ['flashMessage'];
    public $recommendedProduk;
    public $savedDiagnosa;

    // Validasi per langkah
    protected $rules = [
        1 => [
            'nama' => 'required|string|max:255',
            'nomorTelepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'jenisKelamin' => 'required|string|in:Laki-laki,Perempuan',
            'usia' => 'required|integer|min:1|max:120',
        ],
        2 => [
            'kulitKepala' => 'required|array|min:1',
            'kulitKepala.*' => 'exists:kulit_kepalas,id'
        ],
        3 => [
            'prosesKimia' => 'required|array|min:1',
            'prosesKimia.*' => 'exists:proses_kimias,id',
            'teksturRambut' => 'required|array|min:1',
            'teksturRambut.*' => 'exists:tekstur_rambuts,id',
            'ketebalanRambut' => 'required|array|min:1',
            'ketebalanRambut.*' => 'exists:ketebalan_rambuts,id',
            'kondisiRambut' => 'required|array|min:1',
            'kondisiRambut.*' => 'exists:kondisi_rambuts,id',
            'kebiasaanPerawatan' => 'required|array|min:1',
            'kebiasaanPerawatan.*' => 'exists:kebiasaan_perawatans,id',
            'penggunaanStyling' => 'required|array|min:1',
            'penggunaanStyling.*' => 'exists:penggunaan_stylings,id',
        ],
        4 => [
            'harapanKulitKepala' => 'required|array|min:1',
            'harapanKulitKepala.*' => 'exists:harapan_kulit_kepalas,id',
            'harapanBatangRambut' => 'required|array|min:1',
            'harapanBatangRambut.*' => 'exists:harapan_batang_rambuts,id',
        ],
    ];

    public function render()
        {

        return view('livewire.diagnosa-wizard', [
            'kulitKepalas' => KulitKepala::all(),
            'prosesKimias' => ProsesKimia::all(),
            'teksturRambuts' => TeksturRambut::all(),
            'ketebalanRambuts' => KetebalanRambut::all(),
            'kondisiRambuts' => KondisiRambut::all(),
            'kebiasaanPerawatans' => KebiasaanPerawatan::all(),
            'penggunaanStylings' => PenggunaanStyling::all(),
            'harapanKulitKepalas' => HarapanKulitKepala::all(),
            'harapanBatangRambuts' => HarapanBatangRambut::all(),
            'recommendedProduk' => $this->recommendedProduk,
        ])->layout('layouts.app');
    }

    public function nextStep()
    {
        $this->validate($this->rules[$this->step]);
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function resetDiagnosa()
    {
        // Reset semua variabel yang digunakan
        $this->step = 1;
        $this->savedDiagnosa = null;
        $this->recommendedProduk = null;

        // Reset data lainnya jika diperlukan
        $this->reset([
            'nama', 'email', 'nomorTelepon', 'jenisKelamin', 'usia',
            'kulitKepala', 'prosesKimia', 'teksturRambut',
            'ketebalanRambut', 'kondisiRambut', 'kebiasaanPerawatan',
            'penggunaanStyling', 'harapanKulitKepala', 'harapanBatangRambut',
        ]);
    }

    public function submit()
    {
        // Validasi data sesuai step saat ini
        $this->validate($this->rules[$this->step]);

        // Ambil nilai pertama dari array pilihan jika ada
        $selectedKulitKepala = $this->kulitKepala[0] ?? null;

        // Simpan data ke database untuk Diagnosa
        $this->savedDiagnosa = Diagnosa::create([
            'nama' => $this->nama,
            'nomor_telepon' => $this->nomorTelepon,
            'email' => $this->email,
            'jenis_kelamin' => $this->jenisKelamin,
            'usia' => $this->usia,
            'kulit_kepalas_id' => $selectedKulitKepala,
            'proses_kimias_id' => $this->prosesKimia[0] ?? null,
            'tekstur_rambuts_id' => $this->teksturRambut[0] ?? null,
            'ketebalan_rambuts_id' => $this->ketebalanRambut[0] ?? null,
            'kondisi_rambuts_id' => $this->kondisiRambut[0] ?? null,
            'kebiasaan_perawatans_id' => $this->kebiasaanPerawatan[0] ?? null,
            'penggunaan_stylings_id' => $this->penggunaanStyling[0] ?? null,
            'harapan_kulit_kepalas_id' => $this->harapanKulitKepala[0] ?? null,
            'harapan_batang_rambuts_id' => $this->harapanBatangRambut[0] ?? null,
        ]);

        // Ambil produk yang direkomendasikan berdasarkan kulit kepala
        $diagnosa = Diagnosa::find($this->savedDiagnosa->id);

        // Produk yang relevan berdasarkan kulit kepala
        $this->recommendedProduk = Produk::where('kulit_kepalas_id', $selectedKulitKepala)->get();

        // Jika produk ditemukan, simpan relasi dengan diagnosa
        if ($this->recommendedProduk->count() > 0) {
            foreach ($this->recommendedProduk as $produk) {
                // Menyimpan relasi many-to-many pada tabel pivot
                $diagnosa->produk()->attach($produk->id);
            }
        }

        // Reset form untuk langkah berikutnya
        $this->reset();

        // Tampilkan pesan sukses
        session()->flash('success', 'Data berhasil disimpan!');

        // Pindah ke step 5 (kesimpulan)
        $this->step = 5;

        // Ambil diagnosa yang baru saja disimpan untuk ditampilkan pada langkah berikutnya
        $this->savedDiagnosa = Diagnosa::latest()->first();
        $this->recommendedProduk = $this->savedDiagnosa->produk;
    }
}
