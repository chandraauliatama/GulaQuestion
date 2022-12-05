<x-app-layout>
    <div class="container flex flex-col items-center px-6 mx-auto pt-28 pb-12">
        <div class="flex w-full lg:w-2/3 justify-center items-center bg-white space-y-8">
            <div class="w-full md:px-32 lg:px-24">
                <form method="POST" action="{{ route('addproduct.store') }}" class="bg-white rounded-md shadow-2xl p-5"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <a href="{{ route('home') }}"
                            class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                            {{-- <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" /> --}}
                        </a>
                    </div>
                    <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Tambah Data Produk</h1>
                    <p class="text-md font-normal text-gray-600 mb-1">Bantu sesama dengan cara ikut mengisi database
                        produk.</p>
                    <p class="text-xs font-normal text-gray-600 mb-8">Data yang kamu kirimkan akan ditinjau oleh admin
                        terlebih dahulu untuk mengecek kebenarannya</p>
                    <input type="hidden" value="{{ auth()->id() }}" name="user_id">
                    {{-- Name --}}
                    <x-input-label>Nama Produk</x-input-label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" placeholder="e.g. Coca Cola 250ml Varian Ori" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    {{-- Brand/PT --}}
                    <x-input-label class="mt-3">Perusahaan/Brand</x-input-label>
                    <x-text-input id="brand" class="block mt-1 w-full" type="text" name="brand"
                        :value="old('brand')" placeholder="e.g. PT. Coca Cola" required autofocus />
                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />

                    <x-input-label class="mt-3">Kategori</x-input-label>
                    <select id="category" name="category"
                        class="border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-xl shadow-sm block mt-1 w-full">
                        <option>Pilih Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />

                    {{-- BPOM ID --}}
                    <x-input-label class="mt-3">BPOM ID</x-input-label>
                    <x-text-input id="bpom_id" class="block mt-1 w-full" type="text" name="bpom_id"
                        :value="old('bpom_id')" placeholder="e.g. (9120)12323424" required autofocus />
                    <x-input-error :messages="$errors->get('bpom_id')" class="mt-2" />

                    {{-- Berat Produk --}}
                    <x-input-label class="mt-3">Berat Produk(Gram)</x-input-label>
                    <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight"
                        :value="old('weight')" placeholder="e.g. 200" required autofocus />
                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />

                    {{-- Kandungan Gula --}}
                    <x-input-label class="mt-3">Kandungan Gula(Mg)</x-input-label>
                    <x-text-input id="sugar" class="block mt-1 w-full" type="number" name="sugar"
                        :value="old('sugar')" placeholder="e.g. 120" required autofocus />
                    <x-input-error :messages="$errors->get('sugar')" class="mt-2" />


                    <x-input-label class="mt-3">Foto Produk & Kandungan Nilai Gizi</x-input-label>
                    <input
                        class="block w-full text-sm text-gray-600 border border-gray-300 rounded-xl cursor-pointer bg-gray-50 focus:border-green-500 focus:ring-green-500 mb-2"
                        id="image1" name="image1" type="file">
                    <input
                        class="block w-full text-sm text-gray-600 border border-gray-300 rounded-xl cursor-pointer bg-gray-50 focus:border-green-500 focus:ring-green-500"
                        id="image2" name="image2" type="file">

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                        (maks ukuran
                        file 4mb)</p>

                    <x-primary-button>Kirim Data</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
