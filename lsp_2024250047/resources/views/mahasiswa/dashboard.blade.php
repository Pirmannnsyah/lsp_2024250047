<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
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
    <main class="flex-grow flex items-center justify-center py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 text-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 dark:text-gray-100 mb-6">
                    <img src="{{ asset('logo_univ.png') }}" alt="Univ Terbuka" class="h-60 w-70 mx-auto mb-6 rounded-md shadow-sm">
                    <h1 class="text-2xl font-bold mb-4">Selamat datang di halaman calon mahasiswa Univ Terbuka</h1>
                    <p class="mb-4">Di halaman ini, Anda dapat mendaftar sebagai mahasiswa baru atau melihat detail pendaftaran Anda.</p>
                    <p class="mb-4">Univ Terbuka menawarkan berbagai program studi yang berkualitas dengan metode pembelajaran fleksibel yang dapat diakses kapan saja dan di mana saja.</p>
                    
                    
                    <!-- Button Daftar Mahasiswa -->
                    <a href="/mahasiswa/daftarmahasiswa/create" class="mx-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2">
                        Daftar Mahasiswa
                    </a>

                    <!-- Button Lihat Detail Pendaftaran -->
                    <a href="/mahasiswa/daftarmahasiswa/show" class="mx-4 inline-block bg-green-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Lihat Detail Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
