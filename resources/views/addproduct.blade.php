<x-app-layout>
    <div class="container mx-auto flex flex-col items-center px-6 pt-28 pb-12">
        <div class="flex w-full items-center justify-center space-y-8 bg-white lg:w-2/3">
            <div class="w-full md:px-32 lg:px-24">
                <form method="POST" action="{{ route('product.store') }}" class="rounded-md bg-white p-5 shadow-2xl"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="text-center">
                        <a href="{{ route('home') }}"
                           class="mb-5 flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white">
                            {{-- <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" /> --}}
                        </a>
                    </div>
                    <h1 class="mb-1 text-2xl font-bold text-[#79c39b]">Tambah Data Produk</h1>
                    <p class="text-md mb-1 font-normal text-gray-600">Bantu sesama dengan cara ikut mengisi database
                        produk.</p>
                    <p class="mb-8 text-xs font-normal text-gray-600">Data yang kamu kirimkan akan ditinjau oleh admin
                        terlebih dahulu untuk mengecek kebenarannya</p>
                    <input type="hidden" value="{{ auth()->id() }}" name="user_id">
                    {{-- Name --}}
                    <x-input-label>Nama Produk</x-input-label>
                    <x-text-input id="name" class="mt-1 block w-full" type="text" name="name"
                                  :value="old('name')" placeholder="e.g. Coca Cola 250ml Varian Ori" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    {{-- Brand/PT --}}
                    <x-input-label class="mt-3">Perusahaan/Brand</x-input-label>
                    <x-text-input id="brand" class="mt-1 block w-full" type="text" name="brand"
                                  :value="old('brand')" placeholder="e.g. PT. Coca Cola" required autofocus />
                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />

                    <x-input-label class="mt-3">Kategori</x-input-label>
                    <select id="category" name="category"
                            class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                        <option value="">Pilih Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                    <x-input-error :messages="$errors->get('category')" class="mt-2" />

                    {{-- BPOM ID --}}
                    <x-input-label class="mt-3">BPOM ID</x-input-label>
                    <x-text-input id="bpom_id" class="mt-1 block w-full" type="text" name="bpom_id"
                                  :value="old('bpom_id')" placeholder="e.g. (9120)12323424" required autofocus />
                    <x-input-error :messages="$errors->get('bpom_id')" class="mt-2" />

                    {{-- Berat Produk --}}
                    <x-input-label class="mt-3">Berat Produk</x-input-label>
                    <div class="flex">
                        <x-text-input id="weight" class="mt-1 block w-1/2" type="number" name="weight"
                                      :value="old('weight')" placeholder="e.g. 200" required autofocus />
                        <select id="weight_type" name="weight_type"
                                class="mt-1 block w-1/2 rounded-xl border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                            <option value="">Pilih Satuan</option>
                            <option value="gram">gram</option>
                            <option value="mg">mg</option>
                            <option value="liter">liter</option>
                            <option value="ml">ml</option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />

                    {{-- Kandungan Gula --}}
                    <x-input-label class="mt-3">Kandungan Gula</x-input-label>
                    <div class="flex">
                        <x-text-input id="sugar" class="mt-1 block w-1/2" type="number" name="sugar"
                                      :value="old('sugar')" placeholder="e.g. 120" required autofocus />
                        <select id="sugar_type" name="sugar_type"
                                class="mt-1 block w-1/2 rounded-xl border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                            <option value="">Pilih Satuan</option>
                            <option value="gram">gram</option>
                            <option value="mg">mg</option>
                            <option value="liter">liter</option>
                            <option value="ml">ml</option>
                        </select>
                    </div>
                    <x-input-error :messages="$errors->get('sugar')" class="mt-2" />


                    <x-input-label class="mt-3">Foto Produk & Kandungan Nilai Gizi</x-input-label>
                    <input
                           class="mb-2 block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-gray-600 focus:border-green-500 focus:ring-green-500"
                           id="image1" name="image1" type="file" accept=".png,.jpeg,.jpg,.svg">
                    <input
                           class="block w-full cursor-pointer rounded-xl border border-gray-300 bg-gray-50 text-sm text-gray-600 focus:border-green-500 focus:ring-green-500"
                           id="image2" name="image2" type="file" accept=".png,.jpeg,.jpg,.svg">

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                        (maks ukuran
                        file 4mb)</p>

                    <x-primary-button>Kirim Data</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
