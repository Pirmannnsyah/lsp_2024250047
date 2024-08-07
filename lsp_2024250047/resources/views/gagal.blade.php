<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8 text-center">
        <h2 class="text-2xl font-bold text-red-600 mb-4">Error</h2>
        <p class="mb-4 text-gray-700">
            Login Gagal dikarenakan akun anda belum aktif, tunggu admin memverifikasi akun anda terlebih dahulu agar bisa digunakan.
        </p>
        <a href="{{ route('login') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Kembali ke Halaman Login
        </a>
    </div>

</body>
</html>
