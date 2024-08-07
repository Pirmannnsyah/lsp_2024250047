<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="w-2/5 p-6 bg-white shadow-md rounded">
        <h1 class="text-2xl font-bold mb-4">Create Pengumuman</h1>
        <form action="/admin/pengumuman/store" method="POST">
            {{ csrf_field() }}
            <label for="judul_pengumuman" class="block mb-4">
                <span class="block font-semibold mb-1">Judul Pengumuman</span>
                <input type="text" id="judul_pengumuman" name="judul_pengumuman" placeholder="Masukan Judul Pengumuman...." class="p-3 border border-gray-300 shadow-sm rounded w-full block text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </label>
            <label for="deskripsi_pengumuman" class="block mb-4">
                <span class="block font-semibold mb-1">Deskripsi Pengumuman</span>
                <textarea name="deskripsi_pengumuman" id="deskripsi_pengumuman" rows="3" placeholder="Masukan Deskripsi Pengumuman...." class="p-3 border border-gray-300 shadow-sm rounded w-full block text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
            </label>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                Simpan Pengumuman
            </button>
        </form>
    </div>
</body>
</html>
