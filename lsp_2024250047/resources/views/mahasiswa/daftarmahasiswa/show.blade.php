<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
    <div class="max-w-3xl w-full bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Detail Pendaftaran</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Nama Depan -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Depan</label>
                <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->first_name }}</p>
            </div>

            <!-- Nama Belakang -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->last_name }}</p>
            </div>
        </div>

        <!-- Tanggal Lahir -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->birth_date }}</p>
        </div>

        <!-- Agama -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Agama</label>
            <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->religion }}</p>
        </div>

        <!-- Alamat -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Alamat</label>
            <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->address }}</p>
        </div>

        <!-- Program Studi -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Program Studi</label>
            <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->program_study }}</p>
        </div>

        <!-- Jalur Masuk -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Jalur Masuk</label>
            <p class="mt-1 text-gray-900">{{ $daftarmahasiswa->entry_path }}</p>
        </div>

        <!-- Bukti Pembayaran -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700">Bukti Pembayaran</label>
            <img src="{{ asset('storage/' . $daftarmahasiswa->payment_proof) }}" alt="Bukti Pembayaran" class="mt-1 w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="flex justify-end">
            <a href="/mahasiswa/dashboard" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Kembali
            </a>
        </div>
    </div>
</body>
</html>
