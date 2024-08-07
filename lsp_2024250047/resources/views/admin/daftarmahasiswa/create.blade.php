<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

    <div class="max-w-3xl w-full bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Form Pendaftaran</h2>
        <form action="{{ route('daftarmahasiswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                    <input id="first_name" type="text" name="first_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                    <input id="last_name" type="text" name="last_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-6">
                <label for="birth_date" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input id="birth_date" type="date" name="birth_date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>

            <!-- Agama -->
            <div class="mb-6">
                <label for="religion" class="block text-sm font-medium text-gray-700">Agama</label>
                <select id="religion" name="religion" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>

            <!-- Alamat -->
            <div class="mb-6">
                <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="address" name="address" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
            </div>

            <!-- Program Studi -->
            <div class="mb-6">
                <label for="program_study" class="block text-sm font-medium text-gray-700">Program Studi</label>
                <select id="program_study" name="program_study" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled selected>Pilih Program Studi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Hukum">Hukum</option>
                </select>
            </div>

            <!-- Jalur Masuk -->
            <div class="mb-6">
                <label for="entry_path" class="block text-sm font-medium text-gray-700">Jalur Masuk</label>
                <select id="entry_path" name="entry_path" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled selected>Pilih Jalur Masuk</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Pindahan">Pindahan</option>
                    <option value="Transfer">Transfer</option>
                </select>
            </div>

            <!-- Upload Bukti Pembayaran -->
            <div class="mb-6">
                <label for="payment_proof" class="block text-sm font-medium text-gray-700">Upload Bukti Pembayaran</label>
                <input id="payment_proof" type="file" name="payment_proof" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Daftar
                </button>
            </div>
        </form>
    </div>

</body>
</html>
