<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Irwanteam Hairdesign</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        /* Style untuk scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            /* Lebar scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: transparent;
            /* Warna latar belakang track (bagian yang tidak bergeser) */
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #8888;
            /* Warna scrollbar */
            border-radius: 10px;
            /* Garis border di sekitar scrollbar */
        }
    </style>
</head>

<body class="bg-black text-gray-300">
    <!-- Navigation -->
    <nav class="bg-transparent shadow-lg fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('welcome') }}" class="flex items-center">
                        <img src="{{ asset('asset/img/logoir.png') }}" alt="Irwanteam Logo" class="h-8 w-auto">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('welcome') }}" class="text-gray-100 hover:text-red-600 font-medium">Home</a>
                        <a href="{{ route('diagnosis') }}"
                            class="text-gray-100 hover:text-red-600 font-medium">Diagnosis</a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="text-gray-100 focus:outline-none" x-data="{ open: false }">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path x-show="!open" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="open" x-cloak d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden" x-show="open" x-transition x-data="{ open: false }">
            <a href="{{ route('welcome') }}" class="block px-4 py-2 text-gray-100 hover:bg-gray-200">Home</a>
            <a href="{{ route('diagnosis') }}" class="block px-4 py-2 text-gray-100 hover:bg-gray-200">Diagnosis</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen"
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 1) 100%), url('{{ asset('asset/img/hero.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 bg-cover bg-center filter grayscale-[100%]"></div>
        <!-- Filter di bagian background -->
        <div class="flex items-center justify-center h-full text-center text-white relative z-10">
            <div class="flex flex-col items-center mb-4">
                <img src="{{ asset('asset/img/logoir.png') }}" alt="Logo" class="h-16 mb-4">
                <h1 class="text-5xl font-bold text-center">THE BEST TRENDSETTER <br> IN THE WORLD</h1>
                <p class="text-xl mb-6 text-center mt-6">
                    We are dedicated to delivering the highest level of professionalism,
                    expertise, and innovation in the salon industry. Our highly skilled team of stylists, <br> stay
                    up-to-date with the latest trends, techniques, and products to ensure that our clients receive
                    the best possible service and results.
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('diagnosis') }}"
                        class="bg-red-600 hover:bg-red-800 text-white font-bold py-3 px-6 rounded transition duration-300 animate-bounce">
                        Mulai Diagnosa Kulit Kepala
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 px-6 md:px-16 bg-black">
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-8 md:space-y-0 md:space-x-12">
            <!-- Bagian Gambar -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('asset/img/irwan.png') }}" alt="Tentang Kami"
                    class="rounded-lg w-4/5 md:w-3/4 h-auto object-contain mx-auto">
            </div>

            <!-- Bagian Deskripsi -->
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold mb-6 text-gray-100">About Us</h2>
                <p class="text-gray-100 leading-relaxed">
                    In the year of 1986, Irwan Rovany Doke established the first Irwan Team Hairdesign salon in Gatot
                    Subroto.
                    In 1991, the salon moved to Pondok Indah Mall, becoming the first elite salon in a prestigious mall
                    in South Jakarta.
                    Today, Irwan Team Hairdesign has expanded to several malls in Jakarta, Tangerang, and Bekasi,
                    including:
                </p>
                <ul class="mt-4 text-gray-200 list-disc list-inside space-y-1">
                    <li>Pondok Indah Mall</li>
                    <li>Grand Indonesia</li>
                    <li>Senayan City</li>
                    <li>Kota Kasablanka</li>
                    <li>Mall Kelapa Gading</li>
                    <li>Central Park Mall</li>
                    <li>Emporium Pluit Mall</li>
                    <li>PIK Avenue</li>
                    <li>Summarecon Mall Bekasi</li>
                    <li>Summarecon Mall Serpong</li>
                    <li>Bintaro Xchange Mall</li>
                    <li>Gandaria City</li>
                    <li>Lippo Mall Puri</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="products" class="py-16 px-6 md:px-16 bg-black text-white">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Our Products</h2>
            <p class="text-gray-400">Kami menawarkan produk berkualitas tinggi untuk perawatan rambut Anda.</p>
        </div>
        <div class="overflow-x-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($produks as $produk)
                    <div class="rounded-lg shadow-md p-6 text-center w-full">
                        <img src="{{ asset('storage/' . $produk->foto) }}" alt="{{ $produk->foto }}"
                            class="mx-auto mb-4 rounded-lg h-48 object-cover">
                        <h3 class="text-2xl font-semibold mb-2 text-white">{{ $produk->nama }}</h3>
                        <p class="text-gray-400 mb-4">{{ $produk->deskripsi }}</p>
                        <a href="{{ $produk->url }}" target="_blank"
                            class="inline-flex items-center justify-center text-white ">
                            <i class="ri-shopping-cart-line text-xl">
                            </i>
                            <p class="text-white ml-2 mr-2">Beli {{ $produk->nama }}</p>
                            <span class="sr-only">Beli {{ $produk->nama }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <footer class="bg-black text-center py-4">
        <p class="text-gray-100">&copy; 2024 Irwanteam. All rights reserved.</p>
    </footer>

</body>

</html>
