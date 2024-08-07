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
        <h2 class="text-2xl font-bold mb-6">Daftar Pendaftaran</h2>
        <a href="" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700">Tambah Pendaftaran</a>
        
        <table class="min-w-full mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">First Name</th>
                    <th class="px-4 py-2 border">Last Name</th>
                    <th class="px-4 py-2 border">NIK</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Phone</th>
                    <th class="px-4 py-2 border">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                    <tr>
                        <td class="px-4 py-2 border">{{ $us->first_name }}</td>
                        <td class="px-4 py-2 border">{{ $us->last_name }}</td>
                        <td class="px-4 py-2 border">{{ $us->nik }}</td>
                        <td class="px-4 py-2 border">{{ $us->email }}</td>
                        <td class="px-4 py-2 border">{{ $us->phone }}</td>
                        <td class="px-4 py-2 border">
                        <div class="status-akun flex text-sm font-medium text-gray-600">
                            <div class="ml-16">
                                @php
                                $status = $us->status;
                                @endphp
                                @if($status == 'pending')
                                <div class="status-df flex gap-2">
                                    <div>:</div>
                                    <form action="{{route('user.validate_admin',['id'=>$us->id])}}" method="POST">
                                    @method('PATCH')
                                    @csrf
                                        <div class="flex gap-2 status-acc mt-2">
                                            <button type="submit" value = "diterima" name="validatorAdmin" id="valid-accept" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                Terima
                                            </button>
                                            atau
                                            <button type="submit" value = "ditolak" name="validatorAdmin" id="valid-reject" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Tolak
                                            </button>
                                        </div>
                                    </form>  
                                </div>
                                @elseif($status == 'diterima')
                                <div class="status-df flex">
                                    <div class="mr-1">:</div>
                                    <div class="font-semibold text-sm bg-green-900 text-white py-2 px-4 text-center rounded-full mt-2 w-max">
                                        Aktif
                                    </div>
                                </div>
                                @else
                                <div class="status-df flex">
                                    <div class="mr-1">:</div>
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

</body>
</html>
