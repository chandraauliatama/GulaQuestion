<x-app-layout>
    <div class="container flex flex-col items-center px-6 mx-auto pt-28 pb-12">
        <div
            class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}
                </h5>
            </a>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Setiap kemasan berisi 250gram</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mengandung gula sebanyak 3 sendok teh</p>
            <div class="flex justify-center gap-2 mb-4">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
            </div>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Data yang kamu lihat salah atau keliru? <br>
                Bantu
                kami dengan cara:</p>
            <a href="#"
                class="w-full inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                Koreksi Data
            </a>
        </div>
    </div>
</x-app-layout>
