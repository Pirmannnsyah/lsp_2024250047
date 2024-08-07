<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">{{ __("You're logged in!") }}</p>
                    
                    <!-- Button Daftar Mahasiswa -->
                    <a href="/mahasiswa/daftarmahasiswa/create" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Daftar Mahasiswa
                    </a>

                    <!-- Button Lihat Detail Pendaftaran -->
                    <a href="/mahasiswa/daftarmahasiswa/show" class="inline-block ml-4 bg-green-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Lihat Detail Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
