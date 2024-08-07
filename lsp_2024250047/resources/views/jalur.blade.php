<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout.navbar')

    @section('title', 'Welcome')

    @section('content')
    <div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-6">
        <!-- Container for Title and Subtitle -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Jalur Pendaftaran</h1>
            <h2 class="text-2xl text-gray-600">Universitas Terbuka memiliki 3 jalur pendaftaran untuk menjadi mahasiswa baru</h2>
        </div>

        <!-- Cards Section -->
        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mt-12 mx-12">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Pascasarjana Magister (S2)</h3>
                <p class="text-gray-600 mb-6">Program Magister Sistem Informasi Universitas MDP memberikan kesempatan studi lanjut bagi lulusan S1 Semua Program Studi.</p>
                <a href="login" class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">Daftar Sekarang</a>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Jalur Tes</h3>
                <p class="text-gray-600 mb-6">Universitas MDP memiliki beberapa jalur seleksi, salah satunya adalah Ujian Tulis Mandiri Berbasis Komputer.</p>
                <a href="#" class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">Daftar Sekarang</a>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Program Beasiswa Jalur UTBK</h3>
                <p class="text-gray-600 mb-6">Kuliah di Universitas MDP Menggunakan Nilai UTBK SNBT 2024.</p>
                <a href="#" class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>

