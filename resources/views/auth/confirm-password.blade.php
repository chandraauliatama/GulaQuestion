<x-guest-layout>
    <x-slot name="image">
        <img src="{{ asset('images/loginHero.png') }}" alt="">
    </x-slot>


    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form method="POST" action="{{ route('password.confirm') }}" class="bg-white rounded-md shadow-2xl p-5">
                @csrf

                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ asset('images/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="GulaQuestion Logo" />
                        Gula Question
                    </a>
                </div>
                <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Konfirmasi password</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Ini merupakan area aman aplikasi, konfirmasi
                    passwordmu untuk melanjutkan
                </p>


                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="Password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <x-primary-button>Konfirmasi Password</x-primary-button>

            </form>
        </div>

    </div>
</x-guest-layout>
