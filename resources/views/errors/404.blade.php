<x-app-layout>
    <div class="container flex flex-col items-center px-6 mx-auto pt-28 pb-12">
        <svg class="w-20 h-20 mt-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                clip-rule="evenodd"></path>
        </svg>
        <h1 class="text-6xl font-semibold text-red-500">
            404
        </h1>
        <p class="text-gray-700 text-2xl mt-4">
            Halaman tidak ditemukan, periksa alamat atau
            <a class="text-green-500 hover:underline" href="{{ route('home') }}">
                kembali
            </a>
            .
        </p>
    </div>
</x-app-layout>
