<x-guest-layout>
    <x-slot name="image">
        <img src="{{ asset('images/loginHero.png') }}" alt="">
    </x-slot>


    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form method="POST" action="{{ route('password.email') }}" class="bg-white rounded-md shadow-2xl p-5">
                @csrf

                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ asset('images/logo.svg') }}" class="h-6 mr-3 sm:h-9" alt="GulaQuestion Logo" />
                        Gula Question
                    </a>
                </div>
                <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Lupa password?</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Anda bisa meminta untuk reset password melalui email
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                {{-- Email --}}
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Alamat Email" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-primary-button>Kirim Email Reset Password </x-primary-button>

                <div class="flex justify-between mt-4">
                    <a href="{{ route('login') }}"
                        class="text-sm ml-2text-sm font-normal text-gray-600 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        Sudah punya akun?
                    </a>

                    <a href="{{ route('register') }}"
                        class="text-sm ml-2text-sm font-normal text-gray-600 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        Belum punya akun?
                    </a>
                </div>

            </form>
        </div>

    </div>
</x-guest-layout>
