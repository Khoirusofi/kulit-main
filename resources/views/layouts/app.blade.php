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
    <script src="./node_modules/preline/dist/preline.js"></script>

    @livewireStyles

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
    <nav class="bg-transparent fixed shadow-lg top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="flex items-center">
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
    <main class="py-8">
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-black text-center py-4">
        <p class="text-gray-100">&copy; 2024 Irwanteam. All rights reserved.</p>
    </footer>

    @livewireScripts
</body>

</html>
