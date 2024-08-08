<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="/mahasiswa/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
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
        <div class="max-w-3xl w-full bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Detail Pendaftaran</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Nama Depan</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->first_name }}</p>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Nama Belakang</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->last_name }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Tanggal Lahir</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->birth_date }}</p>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Agama</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->birth_date }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Alamat</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->address }}</p>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Program Studi</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->program_study }}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Jalur Masuk</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->entry_path }}</p>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Status Pendaftaran</label>
                    <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->status }}</p>
                </div>
            </div>

            <label class="mb-3 block text-center text-sm font-semibold text-gray-700">Bukti Pembayaran</label>
            <div class="mb-6 flex justify-center">
                <img src="{{ asset('storage/' . $daftarmahasiswa->payment_proof) }}" alt="Bukti Pembayaran" class="border border-gray-300 rounded-md shadow-sm w-80 h-80 object-cover">
            </div>

            <div class="flex justify-end">
                <a href="/mahasiswa/dashboard" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Kembali
                </a>
            </div>
        </div>
    </main>

</body>
</html>
