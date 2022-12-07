<x-app-layout>
    <div class="container mx-auto flex flex-col items-center px-6 pt-28 pb-12">
        <div
             class="max-w-md rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}
                </h5>
            </a>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Setiap kemasan berisi 250gram</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mengandung gula sebanyak 3 sendok teh</p>
            <div class="mb-4 flex justify-center gap-2">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
                <img src="{{ asset('images/sendok.svg') }}" alt="" class="w-16">
            </div>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Data yang kamu lihat salah atau keliru? <br>
                Bantu
                kami dengan cara:</p>
            <a href="{{ route('feedback', $product->id) }}"
               class="inline-flex w-full items-center justify-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300">
                Koreksi Data
            </a>
        </div>
    </div>
</x-app-layout>
