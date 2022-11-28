{{-- <x-guest-layout>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <x-slot name="image">
        <img src="{{ asset('images/loginHero.png') }}">
    </x-slot>

    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form method="POST" action="{{ route('login') }}" class="bg-white rounded-md shadow-2xl p-5">
                @csrf
                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" />
                    </a>
                </div>
                <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Selamat Datang!</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Silahkan login untuk mengakses fitur</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                {{-- Email --}}
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Alamat Email" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- Password --}}
                <x-text-input id="password" class="block mt-6 w-full" type="password" name="password"
                    placeholder="Password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <x-primary-button>Masuk</x-primary-button>

                <div class="flex justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm ml-2text-sm font-normal text-gray-600 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                            Lupa password?
                        </a>
                    @endif

                    <a href="{{ route('register') }}"
                        class="text-sm ml-2text-sm font-normal text-gray-600 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        Belum punya akun?
                    </a>
                </div>

            </form>
        </div>

    </div>
</x-guest-layout>
