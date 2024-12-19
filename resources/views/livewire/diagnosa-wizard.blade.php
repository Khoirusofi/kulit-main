<div class="container mx-auto px-4 py-6">
    <div>
        <div x-data="{ show: false, type: '', message: '' }"
            x-on:flash-message.window="type = $event.detail.type; message = $event.detail.message; show = true; setTimeout(() => show = false, 3000)">
            <div x-show="show" x-transition class="p-4 mb-4 rounded"
                :class="type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'">
                <span x-text="message"></span>
            </div>
        </div>
    </div>

    <div class="min-h-screen bg-black text-white flex items-center justify-center p-6 mt-4">

        <div class="w-full max-w-4xl bg-gray-900 p-8 rounded-lg shadow-xl">
            <h1 class="text-2xl font-bold mb-4 text-center text-red-600">Diagnosa Kulit Kepala</h1>
            <p class="mb-6 text-center text-white">TEMUKAN RANGKAIAN PERAWATAN RAMBUT SESUAI KEBUTUHANMU.</p>
            <!-- Stepper -->
            <ol class="relative flex flex-wrap gap-y-4 sm:flex-row sm:gap-x-2">
                @foreach (['Data Diri', 'Kulit Kepala', 'Kondisi Rambut', 'Harapan', 'Hasil'] as $index => $title)
                    <li class="flex items-center gap-x-2 basis-full sm:shrink sm:basis-0 sm:flex-1 group">
                        <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                            <span
                                class="size-7 flex justify-center items-center shrink-0
                                {{ $step > $index + 1 || ($step === 5 && $index + 1 === 5) ? 'bg-green-600' : ($step === $index + 1 ? 'bg-red-600' : 'bg-gray-600') }}
                                font-medium text-white rounded-full">
                                @if ($step > $index + 1 || ($step === 5 && $index + 1 === 5))
                                    <!-- Icon Checkmark -->
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                @else
                                    <!-- Step Number -->
                                    <span>{{ $index + 1 }}</span>
                                @endif
                            </span>
                            <span
                                class="ms-2 text-sm font-medium
                               {{ $step > $index + 1 || ($step === 5 && $index + 1 === 5) ? 'text-green-600' : ($step === $index + 1 ? 'text-red-600' : 'text-white') }}">
                                {{ $title }}
                            </span>
                        </span>
                        @if ($index < 4)
                            <div
                                class="w-full h-px sm:flex-1
                                {{ $step > $index + 1 || ($step === 5 && $index + 1 === 5) ? 'bg-green-600' : ($step === $index + 1 ? 'bg-red-600' : 'bg-gray-200') }}">
                            </div>
                        @endif
                    </li>
                @endforeach
            </ol>
            <!-- End Stepper -->

            <!-- Step Content -->
            <div class="mt-6">
                @if ($step === 1)
                    <div>
                        <h2 class="text-lg font-semibold text-white">Data Diri</h2>
                        <div class="p-4 rounded-lg">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                                <!-- Nama -->
                                <div class="flex flex-col">
                                    <label for="nama" class="text-sm font-semibold mb-2">Nama Lengkap</label>
                                    <input wire:model.defer="nama" type="text" id="nama" placeholder="Nama"
                                        class="px-4 py-2 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-red-600"
                                        required>
                                    @error('nama')
                                        <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Nomor Telepon -->
                                <div class="flex flex-col">
                                    <label for="nomorTelepon" class="text-sm font-semibold mb-2">Nomor Telepon</label>
                                    <input wire:model.defer="nomorTelepon" type="text" id="nomorTelepon"
                                        placeholder="Nomor Telepon"
                                        class="px-4 py-2 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-red-600"
                                        required>
                                    @error('nomorTelepon')
                                        <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="flex flex-col">
                                    <label for="email" class="text-sm font-semibold mb-2">Email</label>
                                    <input wire:model.defer="email" type="email" id="email" placeholder="Email"
                                        class="px-4 py-2 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-red-600"
                                        required>
                                    @error('email')
                                        <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                                <!-- Jenis Kelamin -->
                                <div class="flex flex-col">
                                    <label for="jenisKelamin" class="text-sm font-semibold mb-2">Jenis Kelamin</label>
                                    <select wire:model.defer="jenisKelamin" id="jenisKelamin"
                                        class="px-4 py-2 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-red-600"
                                        required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenisKelamin')
                                        <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Usia -->
                                <div class="flex flex-col">
                                    <label for="usia" class="text-sm font-semibold mb-2">Usia</label>
                                    <input wire:model.defer="usia" type="number" id="usia" placeholder="Usia"
                                        class="px-4 py-2 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-red-600"
                                        required>
                                    @error('usia')
                                        <span class="text-sm text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($step === 2)
                    <div x-data="{
                        maxSelections: 3,
                        selected: @entangle('kulitKepala'),
                        toggleSelection(id) {
                            if (this.selected.includes(id)) {
                                this.selected = this.selected.filter(item => item !== id);
                            } else if (this.selected.length < this.maxSelections) {
                                this.selected.push(id);
                            }
                        }
                    }" class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Kondisi Kulit Kepala</h3>
                        @error('kulitKepala')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($kulitKepalas as $kulitKepala)
                                <label class="flex items-center mb-2 cursor-pointer">
                                    <input type="checkbox" :value="{{ $kulitKepala->id }}"
                                        x-bind:checked="selected.includes({{ $kulitKepala->id }})"
                                        @click="toggleSelection({{ $kulitKepala->id }})"
                                        :disabled="selected.length >= maxSelections && !selected.includes({{ $kulitKepala->id }})"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $kulitKepala->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @elseif ($step === 3)
                    <div x-data="{
                        selected: @entangle('ketebalanRambut') || [],
                        toggleSelection(id) {
                            if (this.selected.includes(id)) {
                                this.selected = this.selected.filter(item => item !== id);
                            } else {
                                this.selected = [id]
                            }
                        }
                    }" class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Ketebalan Rambut</h3>
                        @error('ketebalanRambut')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            @foreach ($ketebalanRambuts as $ketebalanRambut)
                                <label
                                    class="flex flex-col items-center p-2 bg-gray-400 rounded-lg cursor-pointer transition">
                                    <img src="{{ asset('storage/' . $ketebalanRambut->foto) }}"
                                        alt="{{ $ketebalanRambut->nama }}"
                                        class="w-24 h-24 object-cover rounded-md mb-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" :checked="selected.includes({{ $ketebalanRambut->id }})"
                                            @click="toggleSelection({{ $ketebalanRambut->id }})"
                                            :value="{{ $ketebalanRambut->id }}"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 mr-2">
                                        <span class="text-sm text-white text-left">
                                            {{ $ketebalanRambut->nama }}
                                        </span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Kondisi Rambut</h3>
                        @error('kondisiRambut')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($kondisiRambuts as $kondisiRambut)
                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="kondisiRambut_{{ $kondisiRambut->id }}"
                                        wire:model.defer="kondisiRambut" value="{{ $kondisiRambut->id }}"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $kondisiRambut->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div x-data="{
                        selected: @entangle('teksturRambut') || [],
                        toggleSelection(id) {
                            if (this.selected.includes(id)) {
                                this.selected = this.selected.filter(item => item !== id);
                            } else {
                                this.selected = [id]
                            }
                        }
                    }" class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4"> Model Rambut</h3>
                        @error('teksturRambut')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            @foreach ($teksturRambuts as $teksturRambut)
                                <label
                                    class="flex flex-col items-center p-2 bg-gray-400 rounded-lg cursor-pointer transition">
                                    <img src="{{ asset('storage/' . $teksturRambut->foto) }}"
                                        alt="{{ $teksturRambut->nama }}"
                                        class="w-24 h-24 object-cover rounded-md mb-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" :checked="selected.includes({{ $teksturRambut->id }})"
                                            @click="toggleSelection({{ $teksturRambut->id }})"
                                            :value="{{ $teksturRambut->id }}"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 mr-2">
                                        <span class="text-sm text-white text-left">
                                            {{ $teksturRambut->nama }}
                                        </span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Proses Kimia</h3>
                        @error('prosesKimia')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($prosesKimias as $prosesKimia)
                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="prosesKimia_{{ $prosesKimia->id }}"
                                        wire:model.defer="prosesKimia" value="{{ $prosesKimia->id }}"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $prosesKimia->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div x-data="{
                        maxSelections: 3,
                        selected: @entangle('kebiasaanPerawatan'),
                        toggleSelection(id) {
                            if (this.selected.includes(id)) {
                                this.selected = this.selected.filter(item => item !== id);
                            } else if (this.selected.length < this.maxSelections) {
                                this.selected.push(id);
                            }
                        }
                    }" class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Perawatan Rambut</h3>
                        @error('kebiasaanPerawatan')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($kebiasaanPerawatans as $kebiasaanPerawatan)
                                <label class="flex items-center mb-2 cursor-pointer">
                                    <input type="checkbox" :value="{{ $kebiasaanPerawatan->id }}"
                                        x-bind:checked="selected.includes({{ $kebiasaanPerawatan->id }})"
                                        @click="toggleSelection({{ $kebiasaanPerawatan->id }})"
                                        :disabled="selected.length >= maxSelections && !selected.includes(
                                            {{ $kebiasaanPerawatan->id }})"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $kebiasaanPerawatan->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Penggunaan Styling</h3>
                        @error('penggunaanStyling')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                            @foreach ($penggunaanStylings as $penggunaanStyling)
                                <label
                                    class="flex flex-col items-center p-2 bg-gray-400 rounded-lg cursor-pointer transition">
                                    <img src="{{ asset('storage/' . $penggunaanStyling->foto) }}"
                                        alt="{{ $penggunaanStyling->nama }}"
                                        class="w-24 h-24 object-cover rounded-md mb-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="penggunaanStyling_{{ $penggunaanStyling->id }}"
                                            wire:model.defer="penggunaanStyling" value="{{ $penggunaanStyling->id }}"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 mr-2">
                                        <span class="text-sm text-white text-left">
                                            {{ $penggunaanStyling->nama }}
                                        </span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @elseif ($step === 4)
                    <div class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Harapan Kulit Kepala</h3>
                        @error('harapanKulitKepala')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($harapanKulitKepalas as $harapanKulitKepala)
                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="harapanKulitKepala_{{ $harapanKulitKepala->id }}"
                                        wire:model.defer="harapanKulitKepala" value="{{ $harapanKulitKepala->id }}"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $harapanKulitKepala->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-gray-800 rounded-lg mb-2">
                        <h3 class="text-white font-bold mb-4">Harapan Batang Rambut</h3>
                        @error('harapanBatangRambut')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2">
                            @foreach ($harapanBatangRambuts as $harapanBatangRambut)
                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="harapanBatangRambut_{{ $harapanBatangRambut->id }}"
                                        wire:model.defer="harapanBatangRambut" value="{{ $harapanBatangRambut->id }}"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                                    <span class="ml-2 text-sm text-white">
                                        {{ $harapanBatangRambut->nama }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @elseif ($step === 5)
                    <div class="p-6 bg-gray-800 rounded-lg">
                        <h2 class="text-3xl font-bold text-white mb-6">Hasil Diagnosa</h2>

                        @if ($savedDiagnosa)
                            <div class="bg-gray-800 p-6 rounded-lg mb-6">
                                <!-- Data Diri -->
                                <div class="mb-6">
                                    <h3 class="text-2xl font-semibold text-white mb-4">Data Diri</h3>
                                    <p class="text-gray-300"><strong>Nama :</strong> {{ $savedDiagnosa->nama }}</p>
                                    <p class="text-gray-300"><strong>Email :</strong> {{ $savedDiagnosa->email }}</p>
                                    <p class="text-gray-300"><strong>Jenis Kelamin :</strong>
                                        {{ $savedDiagnosa->jenis_kelamin }}</p>
                                    <p class="text-gray-300"><strong>Usia :</strong> {{ $savedDiagnosa->usia }} Tahun
                                    </p>
                                </div>
                                <hr class="my-6 border-gray-500">

                                <!-- Informasi Diagnosa -->
                                <div class="mb-6">
                                    <h3 class="text-2xl font-semibold text-white mb-4">Informasi Diagnosa</h3>
                                    <p class="text-gray-300 text-center font-semibold mb-2">
                                        {{ $savedDiagnosa->kulitKepala->nama ?? '-' }}
                                    </p>
                                    <p class="text-gray-300 text-center mb-2">
                                        {{ $savedDiagnosa->kulitKepala->deskripsi ?? '-' }}
                                    </p>

                                    <!-- Tips dari Ahli dengan ikon -->
                                    <div class="flex items-center justify-center space-x-2">
                                        <i class="ri-lightbulb-line text-yellow-400"></i> <!-- Ikon Lampu -->
                                        <span class="text-gray-300 font-semibold">Tips dari Ahli</span>
                                    </div>

                                    <p class="text-gray-300 text-center italic">
                                        <i class="ri-quote-fill text-gray-400"></i> <!-- Ikon Kutipan -->
                                        "{{ $savedDiagnosa->kulitKepala->kata ?? '-' }}"
                                    </p>
                                </div>

                                <hr class="my-6 border-gray-500">

                                <!-- Produk yang Direkomendasikan -->
                                <div>
                                    <h4 class="text-xl font-semibold text-white mb-4">Produk yang Direkomendasikan</h4>
                                    @if ($recommendedProduk && $recommendedProduk->count() > 0)
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                            @foreach ($recommendedProduk as $produk)
                                                <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                                                    <!-- Pastikan gambar tidak terpotong -->
                                                    <img src="{{ asset('storage/' . $produk->foto) }}"
                                                        alt="{{ $produk->foto }}"
                                                        class="w-full h-48 object-contain mb-4">
                                                    <div class="text-gray-300">
                                                        <p class="text-lg font-semibold">{{ $produk->nama }}</p>
                                                        <p class="text-sm mt-2 mb-2">{{ $produk->deskripsi }}</p>
                                                        <a href="{{ $produk->url }}" target="_blank"
                                                            class="inline-flex items-center justify-center text-white ">
                                                            <i class="ri-shopping-cart-line text-sm">
                                                            </i>
                                                            <p class="text-white ml-2 mr-2 text-sm">Beli
                                                                {{ $produk->nama }}
                                                            </p>
                                                            <span class="sr-only">Beli {{ $produk->nama }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-red-500">Tidak ada rekomendasi produk untuk diagnosa ini.</p>
                                    @endif
                                </div>

                            </div>
                        @else
                            <p class="text-red-500">Tidak ada data diagnosa yang ditemukan.</p>
                        @endif
                    </div>
                @endif
            </div>
            <!-- End Step Content -->

            <!-- Navigation Buttons -->
            <div class="mt-6 flex justify-between">
                @if ($step > 1 && $step < 5)
                    <button wire:click="previousStep" wire:loading.attr="disabled"
                        class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-600 flex items-center justify-center">
                        <i class="ri-arrow-left-line mr-2" wire:loading.remove></i>
                        <span wire:loading.remove>Sebelumnya</span>
                        <div wire:loading
                            class="animate-spin inline-block size-4 border-[2px] border-current border-t-transparent text-white rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                @endif

                @if ($step < 4)
                    <button wire:click="nextStep" wire:loading.attr="disabled"
                        class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 flex items-center justify-center">
                        <span wire:loading.remove>Berikutnya</span>
                        <i class="ri-arrow-right-line ml-2" wire:loading.remove></i>
                        <div wire:loading
                            class="animate-spin inline-block size-4 border-[2px] border-current border-t-transparent text-white rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                @endif

                @if ($step === 4)
                    <button wire:click.prevent="submit" wire:loading.attr="disabled"
                        class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 flex items-center justify-center">
                        <span wire:loading.remove>Diagnosa</span>
                        <i class="ri-check-line ml-2" wire:loading.remove></i>
                        <div wire:loading
                            class="animate-spin inline-block size-4 border-[2px] border-current border-t-transparent text-white rounded-full"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                @endif

                @if ($step === 5)
                    <button wire:click="resetDiagnosa" wire:loading.attr="disabled"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 flex items-center justify-center transition">
                        <i class="ri-refresh-line mr-2" wire:loading.remove></i>
                        <span wire:loading.remove>Diagnosa Ulang</span>
                        <div wire:loading
                            class="animate-spin inline-block w-4 h-4 border-2 border-current border-t-transparent rounded-full text-white ml-2"
                            role="status" aria-label="loading">
                        </div>
                    </button>
                @endif
            </div>
            <!-- End Navigation Buttons -->
        </div>
    </div>
</div>
