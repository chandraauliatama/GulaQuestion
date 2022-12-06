<x-guest-layout>
    <x-slot name="image">
        <img src="{{ asset('images/registerHero.png') }}" alt="">
    </x-slot>

    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <div class="bg-white rounded-md shadow-2xl p-5">
                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img src="{{ asset('images/logo.png') }}" class="h-16 sm:h-16" alt="GulaQuestion Logo" />
                    </a>
                </div>
                <h1 class="text-[#79c39b] font-bold text-2xl mb-1">Konfirmasi Email</h1>
                <p class="text-sm font-normal text-gray-600 mb-8 text-justify">Terima kasih telah mendaftar! Untuk
                    melanjutkan,
                    silahkan verifikasi alamat email kamu dengan mengeklik tautan yang baru saja kami kirimkan pada
                    alamat emailmu. Jika kamu tidak menerima email tersebut, kami dengan senang hati akan
                    mengirimkan email lain kepadamu.
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <x-primary-button>
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-sm ml-2 font-normal text-gray-600 hover:text-green-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
