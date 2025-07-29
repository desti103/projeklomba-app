<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | LombaKita</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-yellow-100 via-pink-100 to-blue-100 text-gray-800 font-sans">
    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-white/70 shadow-md sticky top-0 backdrop-blur-md z-50">
        <h1 class="text-2xl font-bold text-indigo-600">LombaKita</h1>
        <nav class="space-x-4">
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
            <a href="{{ route('register') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded-full hover:bg-indigo-700 transition">
                Daftar
            </a>
        </nav>
    </header>

    <!-- Hero Section -->
    <main class="text-center py-16 px-4">
        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 text-indigo-700 animate-fade-in-up">
            Selamat Datang di <span class="text-pink-600">LombaKita</span>!
        </h2>
        <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto mb-8">
            Platform pendaftaran lomba online yang menyenangkan, praktis, dan seru! Mari ikut berbagai kompetisi dan raih prestasi.
        </p>

        <!-- CTA -->
        <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-16">
            <a href="{{ route('login') }}"
               class="px-6 py-3 rounded-full bg-white text-indigo-600 font-semibold shadow hover:shadow-lg transition">
                Masuk
            </a>
            <a href="{{ route('register') }}"
               class="px-6 py-3 rounded-full bg-indigo-500 text-white font-semibold shadow hover:bg-indigo-600 transition">
                Daftar Sekarang
            </a>
        </div>

        <!-- Fitur Section -->
        <section class="grid gap-6 md:grid-cols-3">
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="mb-4 text-pink-500 text-4xl">🏆</div>
                <h3 class="text-xl font-bold mb-2">Beragam Lomba</h3>
                <p class="text-sm text-gray-600">Tersedia kompetisi akademik, seni, olahraga & lainnya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="mb-4 text-blue-500 text-4xl">👥</div>
                <h3 class="text-xl font-bold mb-2">Komunitas Peserta</h3>
                <p class="text-sm text-gray-600">Bertemu & bersaing dengan peserta dari seluruh Indonesia.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition text-center">
                <div class="mb-4 text-yellow-500 text-4xl">🎁</div>
                <h3 class="text-xl font-bold mb-2">Hadiah Menarik</h3>
                <p class="text-sm text-gray-600">Sertifikat, uang tunai, dan banyak reward eksklusif!</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-500 py-6">
        &copy; {{ date('Y') }} LombaKita. All rights reserved.
    </footer>
</body>
</html>
