<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    @extends('layout.navbar')

    @section('title', 'Welcome')

    @section('content')
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-4xl">
        <h1 class="text-2xl font-bold mb-4 text-center">Alur Pendaftaran Calon Mahasiswa Baru</h1>
        <p class="text-lg mb-4">Proses pendaftaran calon mahasiswa baru di Universitas MDP, antara lain:</p>
        <ol class="list-decimal list-inside space-y-4 text-gray-700">
            <li>
                <span class="font-semibold">Calon Mahasiswa Baru</span> mengisi formulir Registrasi Online Melalui Jalur Pendaftaran yang dipilih.
            </li>
            <li>
                <span class="font-semibold">Calon Mahasiswa Baru</span> mendapatkan Email berisi Username dan Password untuk login pada menu Login Calon Mahasiswa Baru.
            </li>
            <li>
                <span class="font-semibold">Calon Mahasiswa Baru</span> membayar biaya pendaftaran sebesar <span class="font-semibold text-green-600">Rp. 400.000,-</span> ke rekening : BCA 0210999396 atas nama : Yayasan Multi Data Palembang.
            </li>
            <li>
                <span class="font-semibold">Calon Mahasiswa Baru</span> Mengupload Bukti Bayar melalui menu Login Calon Mahasiswa Baru.
            </li>
            <li>
                <span class="font-semibold">Administrasi Penerimaan Mahasiswa Baru</span> akan melakukan validasi Bukti Bayar yang sudah diupload.
            </li>
            <li>
                <span class="font-semibold">Administrasi Penerimaan Mahasiswa Baru</span> akan menghubungi Calon Mahasiswa Baru melalui Telepon dan WhatsApp untuk langkah-langkah selanjutnya.
            </li>
        </ol>
        <div class="mt-6 p-4 border-t border-gray-200">
            <p class="text-sm text-gray-600">
                <span class="font-semibold">Catatan:</span><br>
                Pembayaran dapat dilakukan melalui Transfer Antar Bank dan Secara Tunai di Kampus MDP.<br>
                Bukti Pembayaran dapat dikumpulkan langsung ke Kampus MDP dan WhatsApp Penerimaan Mahasiswa Baru di jam kerja.<br>
                Calon Mahasiswa Baru harap mengumpulkan berkas-berkas yang diperlukan sesuai Jalur Penerimaan yang dipilih.
            </p>
        </div>
    </div>
    @endsection

</body>
</html>