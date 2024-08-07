<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 mt-24">
    @extends('layout.navbar')

    @section('title', 'Pengumuman')

    @section('content')
    <div class="text-3xl font-semibold text-center text-gray-800 mb-8">PENGUMUMAN</div>
    
    @foreach ($pengumuman as $p)
    <div class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg shadow-lg mb-6">
        <div class="p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $p->judul_pengumuman }}</h2>
            <div class="border-t border-gray-300 my-3"></div>
            <p class="text-gray-700 mb-4">{{ $p->deskripsi_pengumuman }}</p>
            <div class="flex justify-end space-x-4">
                @auth
                    @if(Auth::user()->role == 'admin') 
                        <a href="/admin/pengumuman/{{$p->id}}/edit" class="text-blue-500 hover:underline">Edit</a>
                        <form action="/admin/pengumuman/{{ $p->id }}" method="POST" class="inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
    @endforeach
    @endsection
</body>
</html>
