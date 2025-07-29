<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Pendaftaran Lomba!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/1600x900/?competition,event') no-repeat center center/cover;
            /* Ganti URL gambar dengan gambar yang lebih relevan jika ada */
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">

    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="/" class="text-2xl font-bold text-gray-800">LombaYuk!</a>
            <nav>
                <a href="{{ route('login') }}" class="ml-4 text-gray-600 hover:text-blue-600 font-medium">Login</a>
                <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">Daftar Sekarang!</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section text-white flex flex-col justify-center items-center h-screen px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4">
                Wujudkan Bakatmu di Ajang Kompetisi Bergengsi!
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl">
                Temukan dan ikuti berbagai lomba menarik, kembangkan potensi diri, dan raih prestasi terbaikmu.
            </p>
            <div class="space-x-4">
                <a href="{{ route('register') }}" class="px-8 py-4 bg-yellow-500 text-gray-900 text-xl font-bold rounded-full hover:bg-yellow-600 transition duration-300 shadow-lg">
                    Daftar Lomba Sekarang!
                </a>
                <a href="{{ route('login') }}" class="px-8 py-4 border border-white text-white text-xl font-bold rounded-full hover:bg-white hover:text-gray-900 transition duration-300">
                    Sudah Punya Akun? Login
                </a>
            </div>
        </section>

        <section class="py-16 bg-white px-6">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12">Mengapa Bergabung dengan LombaYuk!?</h2>
                <div class="grid md:grid-cols-3 gap-10">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">Beragam Kategori Lomba</h3>
                        <p class="text-gray-600">Mulai dari akademik, seni, olahraga, hingga teknologi. Temukan yang cocok untuk Anda!</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">Proses Pendaftaran Mudah</h3>
                        <p class="text-gray-600">Daftar dalam hitungan menit dengan antarmuka yang intuitif dan cepat.</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-gray-700 mb-4">Update Lomba Terbaru</h3>
                        <p class="text-gray-600">Selalu dapatkan informasi terbaru tentang lomba-lomba yang akan datang.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-blue-600 text-white px-6 text-center">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold mb-6">Siap Mengukir Prestasi?</h2>
                <p class="text-xl mb-8">Jangan lewatkan kesempatan emas ini. Mari bergabung dan mulai petualangan kompetisimu!</p>
                <a href="{{ route('register') }}" class="px-8 py-4 bg-white text-blue-600 text-xl font-bold rounded-full hover:bg-gray-200 transition duration-300 shadow-lg">
                    Mulai Sekarang!
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-8 text-center">
        <div class="container mx-auto px-6">
            <p>&copy; {{ date('Y') }} LombaYuk!. All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="text-gray-400 hover:text-white mx-2">Kebijakan Privasi</a>
                <span class="text-gray-400">|</span>
                <a href="#" class="text-gray-400 hover:text-white mx-2">Syarat & Ketentuan</a>
            </div>
        </div>
    </footer>

</body>
</html>