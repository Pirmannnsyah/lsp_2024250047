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
    <div class="flex h-screen">
        <!-- Sidebar (60%) -->
        <div class="w-3/5  px-32 py-16 flex items-center justify-center">
            <!-- Centering the image horizontally and vertically -->
            <div>
                <h2 class="text-5xl font-semibold mb-2">Pendaftaran Mahasiswa Baru</h2>
                <h2 class="text-2xl font-semibold mb-4">Ayo gabung bersama kami di Universitas Terbuka</h2>
                <p class="text-sm mb-4">Universitas Terbuka (UT) adalah perguruan tinggi negeri yang menyediakan pendidikan tinggi melalui sistem pendidikan jarak jauh. Didirikan pada tahun 1984, UT bertujuan untuk memberikan akses pendidikan tinggi yang lebih luas kepada masyarakat Indonesia,  Universitas ini menawarkan beragam program studi di berbagai bidang, termasuk ilmu pendidikan, ilmu sosial, ilmu ekonomi, sains dan teknologi, serta kesehatan.</p>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <a href="/login">Daftar Sekarang</a>
                </button>
            </div>
        </div>

        <!-- Main Content (40%) -->
        <div class="w-2/5  px-16 flex items-center justify-center flex-col text-center">
        <img src="{{ asset('welcome_study.png') }}" alt="Placeholder Image" class="max-w-lg max-h-lg">
            
        </div>
    </div>
    @endsection
</body>
</html>