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
            <h2 class="text-2xl font-bold mb-6">Daftar Pendaftaran</h2>
            <a href="" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700">Tambah Pendaftaran</a>
            
            <table class="min-w-full mt-6 bg-white shadow-md rounded-lg border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border-b">First Name</th>
                        <th class="px-4 py-2 border-b">Last Name</th>
                        <th class="px-4 py-2 border-b">NIK</th>
                        <th class="px-4 py-2 border-b">Email</th>
                        <th class="px-4 py-2 border-b">Phone</th>
                        <th class="px-4 py-2 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $us)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $us->first_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $us->last_name }}</td>
                            <td class="px-4 py-2 border-b">{{ $us->nik }}</td>
                            <td class="px-4 py-2 border-b">{{ $us->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $us->phone }}</td>
                            <td class="px-4 py-2 border-b">
                                <div class="status-akun flex text-sm font-medium text-gray-600">
                                    <div class="ml-16">
                                        @php
                                        $status = $us->status;
                                        @endphp
                                        @if($status == 'pending')
                                        <div class="status-df flex gap-2">
                                            <div></div>
                                            <form action="{{route('user.validate_admin',['id'=>$us->id])}}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                                <div class="flex gap-2 status-acc mt-2">
                                                    <button type="submit" value="diterima" name="validatorAdmin" id="valid-accept" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                                                        Terima
                                                    </button>
                                                    atau
                                                    <button type="submit" value="ditolak" name="validatorAdmin" id="valid-reject" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                                        Tolak
                                                    </button>
                                                </div>
                                            </form>  
                                        </div>
                                        @elseif($status == 'diterima')
                                        <div class="status-df flex">
                                            <div class="mr-1"></div>
                                            <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                                Aktif
                                            </div>
                                        </div>
                                        @else
                                        <div class="status-df flex">
                                            <div class="mr-1"></div>
                                            <div class="font-semibold text-sm bg-red-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                                Tidak Aktif
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
