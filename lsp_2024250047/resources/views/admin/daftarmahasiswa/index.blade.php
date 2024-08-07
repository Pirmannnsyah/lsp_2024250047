<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-6">Data Pendaftar</h2>
        
        <table class="min-w-full mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Nama Depan</th>
                    <th class="px-4 py-2 border">Nama Belakang</th>
                    <th class="px-4 py-2 border">Tanggal Lahir</th>
                    <th class="px-4 py-2 border">Agama</th>
                    <th class="px-4 py-2 border">Alamat</th>
                    <th class="px-4 py-2 border">Program Studi</th>
                    <th class="px-4 py-2 border">Jalur Masuk</th>
                    <th class="px-4 py-2 border">Bukti Pembayaran</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftarmahasiswa as $d)
                    <tr>
                        <td class="px-4 py-2 border">{{ $d->first_name }}</td>
                        <td class="px-4 py-2 border">{{ $d->last_name }}</td>
                        <td class="px-4 py-2 border">
                            {{ \Carbon\Carbon::parse($d->birth_date)->format('d-m-Y') }}
                        </td>
                        <td class="px-4 py-2 border">{{ $d->religion }}</td>
                        <td class="px-4 py-2 border">{{ $d->address }}</td>
                        <td class="px-4 py-2 border">{{ $d->program_study }}</td>
                        <td class="px-4 py-2 border">{{ $d->entry_path }}</td>
                        <td class="px-4 py-2 border">
                            @if ($d->payment_proof)
                                <a href="{{ Storage::url($d->payment_proof) }}" class="text-blue-500 hover:underline" target="_blank">Lihat Bukti</a>
                            @else
                                Tidak ada
                            @endif
                        </td>
                        <td class="px-4 py-2 border">
                            <a href="/admin/daftarmahasiswa/{{$d->id}}/edit" class="text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
