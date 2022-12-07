<x-app-layout>
    <div class="container mx-auto flex flex-col items-center px-6 pt-28 pb-12">
        <div class="flex w-full items-center justify-center space-y-8 bg-white lg:w-2/3">
            <div class="w-full md:px-32 lg:px-24">
                <div class="rounded-md bg-white p-5 shadow-2xl">
                    <div class="text-center">
                        <a href="{{ route('home') }}"
                           class="mb-5 flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                            {{-- <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" /> --}}
                        </a>
                    </div>
                    <h1 class="mb-1 text-2xl font-bold text-[#79c39b]">Berikan Saran Perbaikan Data</h1>
                    <p class="text-md mb-1 font-normal text-gray-600">Bantu sesama dengan cara memberikan koreksi
                        apabila melihat data yang salah</p>
                    <p class="mb-8 text-xs font-normal text-gray-600">Data yang kamu kirimkan akan ditinjau oleh admin
                        terlebih dahulu untuk mengecek kebenarannya</p>
                    {{-- Name --}}
                    <x-input-label>Nama Produk</x-input-label>
                    <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="$product->name" disabled />

                    {{-- Brand/PT --}}
                    <x-input-label class="mt-3">Perusahaan/Brand</x-input-label>
                    <x-text-input id="brand" class="mt-1 block w-full" type="text" name="brand" :value="$product->brand" disabled />

                    <x-input-label class="mt-3">Kategori</x-input-label>
                    <x-text-input id="category" class="mt-1 block w-full capitalize" type="text" name="category" :value="$product->category" disabled />

                    {{-- BPOM ID --}}
                    <x-input-label class="mt-3">BPOM ID</x-input-label>
                    <x-text-input id="bpom_id" class="mt-1 block w-full" type="text" name="bpom_id" :value="$product->bpom_id" disabled />

                    {{-- Berat Produk --}}
                    <x-input-label class="mt-3">Berat Produk(Gram)</x-input-label>
                    <x-text-input id="weight" class="mt-1 block w-full" type="number" name="weight" :value="$product->weight" disabled />

                    {{-- Kandungan Gula --}}
                    <x-input-label class="mt-3">Kandungan Gula(Mg)</x-input-label>
                    <x-text-input id="sugar" class="mt-1 block w-full" type="number" name="sugar" :value="$product->sugar" disabled />


                    <form action="{{ route('feedback.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <x-input-label class="mt-3">Saran Perbaikan Data</x-input-label>
                        <textarea id="feedback" name="feedback" rows="4" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-green-500 focus:ring-green-500" placeholder="Tuliskan apa yang salah dan apa yang harus diperbaiki...." required autofocus></textarea>


                        <x-input-label class="mt-3">Foto Produk & Kandungan Nilai Gizi</x-input-label>
                        <input
                               class="mb-2 block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-gray-600 focus:border-green-500 focus:ring-green-500"
                               id="image1" name="image1" type="file">
                        <input
                               class="block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-gray-600 focus:border-green-500 focus:ring-green-500"
                               id="image2" name="image2" type="file">

                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                            (maks ukuran
                            file 4mb)</p>

                        <x-primary-button>Kirim Data</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
