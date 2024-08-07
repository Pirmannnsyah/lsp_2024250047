<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="welcome" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('logo_univ.png') }}" class="h-11" alt="Univ Logo">
                            <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Univ Terbuka</span>
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- Log out Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="ml-4 bg-blue-500 text-white px-4 py-1 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">
                            {{ __('Log out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg p-8">
                <div class="text-gray-900 dark:text-gray-100 mb-8 text-center">
                    <h1 class="text-3xl font-extrabold mb-4 text-gray-900 dark:text-gray-100">Dashboard Admin</h1>
                    <p class="mb-6 text-gray-700 dark:text-gray-300">Di halaman ini, Anda dapat melakukan Create, Read, Update dan Delete dari akun dan pengumuman.</p>
                    
                    <div class="flex justify-center space-x-6">
                        <!-- Button Kelola Akun -->
                        <a href="{{ route('admin.verifikasi_akun') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                            Kelola Akun
                        </a>

                        <!-- Button Kelola Data Mahasiswa -->
                        <a href="/admin/daftarmahasiswa" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                            Kelola Data Mahasiswa
                        </a>

                        <!-- Button Kelola Pengumuman -->
                        <a href="/pengumuman" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                            Kelola Pengumuman
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
