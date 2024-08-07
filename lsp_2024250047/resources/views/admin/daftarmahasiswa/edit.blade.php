<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">

    <div class="max-w-3xl w-full bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Edit Pendaftaran</h2>
        <form action="/admin/daftarmahasiswa/{{$daftarmahasiswa->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Nama Depan -->
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                    <input id="first_name" type="text" name="first_name" value="{{ old('first_name', $daftarmahasiswa->first_name) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>

                <!-- Nama Belakang -->
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                    <input id="last_name" type="text" name="last_name" value="{{ old('last_name', $daftarmahasiswa->last_name) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="mb-6">
                <label for="birth_date" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input id="birth_date" type="date" name="birth_date" value="{{ old('birth_date', $daftarmahasiswa->birth_date) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>

            <!-- Agama -->
            <div class="mb-6">
                <label for="religion" class="block text-sm font-medium text-gray-700">Agama</label>
                <select id="religion" name="religion" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled>Pilih Agama</option>
                    <option value="Islam" {{ old('religion', $daftarmahasiswa->religion) == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('religion', $daftarmahasiswa->religion) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ old('religion', $daftarmahasiswa->religion) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ old('religion', $daftarmahasiswa->religion) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Budha" {{ old('religion', $daftarmahasiswa->religion) == 'Budha' ? 'selected' : '' }}>Budha</option>
                </select>
            </div>

            <!-- Alamat -->
            <div class="mb-6">
                <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="address" name="address" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ old('address', $daftarmahasiswa->address) }}</textarea>
            </div>

            <!-- Program Studi -->
            <div class="mb-6">
                <label for="program_study" class="block text-sm font-medium text-gray-700">Program Studi</label>
                <select id="program_study" name="program_study" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled>Pilih Program Studi</option>
                    <option value="Teknik Informatika" {{ old('program_study', $daftarmahasiswa->program_study) == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                    <option value="Sistem Informasi" {{ old('program_study', $daftarmahasiswa->program_study) == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="Manajemen" {{ old('program_study', $daftarmahasiswa->program_study) == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                    <option value="Akuntansi" {{ old('program_study', $daftarmahasiswa->program_study) == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                    <option value="Hukum" {{ old('program_study', $daftarmahasiswa->program_study) == 'Hukum' ? 'selected' : '' }}>Hukum</option>
                </select>
            </div>

            <!-- Jalur Masuk -->
            <div class="mb-6">
                <label for="entry_path" class="block text-sm font-medium text-gray-700">Jalur Masuk</label>
                <select id="entry_path" name="entry_path" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="" disabled>Pilih Jalur Masuk</option>
                    <option value="Reguler" {{ old('entry_path', $daftarmahasiswa->entry_path) == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                    <option value="Pindahan" {{ old('entry_path', $daftarmahasiswa->entry_path) == 'Pindahan' ? 'selected' : '' }}>Pindahan</option>
                    <option value="Transfer" {{ old('entry_path', $daftarmahasiswa->entry_path) == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                </select>
            </div>

            <!-- Upload Bukti Pembayaran -->
            <div class="mb-6">
                <label for="payment_proof" class="block text-sm font-medium text-gray-700">Upload Bukti Pembayaran</label>
                @if($daftarmahasiswa->payment_proof)
                    <div class="mb-2">
                        <a href="{{ Storage::url($daftarmahasiswa->payment_proof) }}" class="text-blue-500 hover:underline" target="_blank">Lihat Bukti Pembayaran</a>
                    </div>
                @endif
                <input id="payment_proof" type="file" name="payment_proof" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>
</html>
