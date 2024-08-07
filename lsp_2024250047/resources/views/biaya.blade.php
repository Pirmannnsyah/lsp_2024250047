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
    <div class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
        <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-3xl">
            <!-- Tabel 1 Kolom 4 Baris -->
            <h2 class="text-xl font-semibold mb-4 text-center">Biaya Pendidikan</h2>
            <table class="w-full border border-gray-300 rounded-lg mb-6">
                <thead class="text-center">
                    <tr class="bg-gray-200">
                        <th class="p-4 ">Biaya Sumbangan Pembangunan</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="p-4 border-b">Strata 1 (S1) </td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b">Rp. 8.000.000,- ❌-</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b">Rp. 7.000.000,- ✔️-</td>
                    </tr>
                </tbody>
            </table>

            <!-- Tabel 3 Kolom 7 Baris -->
            <h2 class="text-xl font-semibold mb-4 text-center">Biaya Kuliah / UKT</h2>
            <table class="w-full border border-gray-300 rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-4 border-r">Program Studi</th>
                        <th class="p-4 border-r">Pagi</th>
                        <th class="p-4">Malam</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="p-4 border-b border-r">Akutansi (S1) </td>
                        <td class="p-4 border-b border-r">Rp. 7.000.000,-</td>
                        <td class="p-4 border-b">Rp. 8.000.000,-</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-r">Manajemen (S1) </td>
                        <td class="p-4 border-b border-r">Rp. 8.000.000,-</td>
                        <td class="p-4 border-b">Rp. 9.000.000,-</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-r">Teknik Elektro (S1) </td>
                        <td class="p-4 border-b border-r">Rp. 5.000.000,-</td>
                        <td class="p-4 border-b">Rp. 6.000.000,-</td>
                    </tr>
                    <tr>
                        <td class="p-4 border-b border-r">Informatika (S1) </td>
                        <td class="p-4 border-b border-r">Rp. 8.000.000,-</td>
                        <td class="p-4 border-b">Rp. 9.000.000,-</td>
                    </tr>
                    <tr>
                    <td class="p-4 border-b border-r">Sistem Informasi (S1) </td>
                        <td class="p-4 border-b border-r">Rp. 8.000.000,-</td>
                        <td class="p-4 border-b">Rp. 9.000.000,-</td>
                    </tr>
                    <tr>
                    <td class="p-4 border-b border-r">Informatika (S2) </td>
                        <td class="p-4 border-b border-r">Rp. 10.000.000,-</td>
                        <td class="p-4 border-b">Rp. 11.000.000,-</td>
                    </tr>
                    <tr>
                    <td class="p-4 border-b border-r">Sistem Informasi (S2) </td>
                        <td class="p-4 border-b border-r">Rp. 10.000.000,-</td>
                        <td class="p-4 border-b">Rp. 11.000.000,-</td>
                    </tr>
            </tbody>
        </table>
    </div>
    </div>
    @endsection
</body>
</html>

