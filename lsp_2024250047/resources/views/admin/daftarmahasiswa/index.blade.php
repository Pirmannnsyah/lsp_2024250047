<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="/mahasiswa/dashboard/" class="flex items-center space-x-3 rtl:space-x-reverse">
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

    <!-- Page Content -->
    <main class="flex-1 p-6">
        <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-8">
            <a class="text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/admin/dashboard">
                Back
            </a>
            <h2 class="text-2xl font-bold mb-6">Data Pendaftar</h2>
            
            <table class="min-w-full mt-6 bg-white shadow-md rounded-lg border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border-b">Nama Depan</th>
                        <th class="px-4 py-2 border-b">Nama Belakang</th>
                        <th class="px-4 py-2 border-b">Tanggal Lahir</th>
                        <th class="px-4 py-2 border-b">Agama</th>
                        <th class="px-4 py-2 border-b">Alamat</th>
                        <th class="px-4 py-2 border-b">Program Studi</th>
                        <th class="px-4 py-2 border-b">Jalur Masuk</th>
                        <th class="px-4 py-2 border-b">Bukti Pembayaran</th>
                        <th class="px-4 py-2 border-b">Status</th>
                        <th class="px-4 py-2 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarmahasiswa as $d)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $d->first_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $d->last_name }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ \Carbon\Carbon::parse($d->birth_date)->format('d-m-Y') }}
                            </td>
                            <td class="px-4 py-2 border-b">{{ $d->religion }}</td>
                            <td class="px-4 py-2 border-b">{{ $d->address }}</td>
                            <td class="px-4 py-2 border-b">{{ $d->program_study }}</td>
                            <td class="px-4 py-2 border-b">{{ $d->entry_path }}</td>
                            <td class="px-4 py-2 border-b">
                                @if ($d->payment_proof)
                                    <a href="{{ Storage::url($d->payment_proof) }}" class="text-blue-500 hover:underline" target="_blank">Lihat Bukti</a>
                                @else
                                    Tidak ada
                                @endif
                            </td>
                            <td class="px-4 py-2 border-b">
                                <a href="/admin/daftarmahasiswa/{{$d->id}}/edit" class="text-blue-500 hover:underline">Edit</a>
                                <form action="/admin/daftarmahasiswa/{{ $d->id }}" method="POST" class="inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
