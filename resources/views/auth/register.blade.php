<x-guest-layout>
    <x-slot name="image">
        <img src="{{ asset('images/registerHero.png') }}">
    </x-slot>

    <div class="flex w-full lg:w-1/2 justify-center items-center bg-[#79c39b] lg:bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form method="POST" action="{{ route('register') }}" class="bg-white rounded-md shadow-2xl p-5">
                @csrf
                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" />
                    </a>
                </div>
                <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Selamat Datang!</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Silahkan membuat akun untuk mengakses fitur</p>
                {{-- Name --}}
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Nama Lengkap" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                {{-- Email --}}
                <x-text-input id="email" class="block mt-6 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Alamat Email" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- Password --}}
                <x-text-input id="password" class="block mt-6 w-full" type="password" name="password"
                    placeholder="Password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                {{-- Confirm Password --}}
                <x-text-input id="password_confirmation" class="block mt-6 w-full" type="password"
                    name="password_confirmation" placeholder="Konfirmasi Password" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <x-primary-button>Daftar</x-primary-button>

                <a href="{{ route('login') }}"
                    class="text-sm ml-2text-sm font-normal text-gray-600 mb-8 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                    Sudah punya akun?
                </a>

            </form>
        </div>

    </div>
</x-guest-layout>
