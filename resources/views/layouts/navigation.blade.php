<nav class="border-b border-green-200 bg-white py-2.5 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between px-4">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="GulaQuestion Logo" />
            {{-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Gula Question</span> --}}
        </a>
        <div class="flex items-center lg:order-2">
            @guest
                <a href="{{ route('register') }}"
                   class="hidden rounded-lg px-4 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100 hover:text-green-400 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800 sm:mr-2 md:block lg:px-5 lg:py-2.5">Register</a>
                <a href="{{ route('login') }}"
                   class="rounded-lg bg-[#79c39b] px-4 py-2 text-sm font-medium text-white hover:bg-[#20ba67] focus:outline-none focus:ring-4 focus:ring-green-400 dark:bg-green-500 dark:hover:bg-green-500 dark:focus:ring-green-800 sm:mr-2 lg:mr-0 lg:px-5 lg:py-2.5">Login</a>
            @endguest
            @auth
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                    class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                                <div>{{ Str::headline(auth()->user()->name) }}</div>

                                <div class="ml-1">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            @if (auth()->user()->role == 'admin')
                                <x-dropdown-link :href="route('filament.pages.dashboard')">
                                    {{ __('Admin Dashboard') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
            <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-500 lg:hidden"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto" id="mobile-menu-2">
            <ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8" id="navMenu">
                <li>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index', 'product.show')">Cek Data Gula</x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('product.create')" :active="request()->routeIs('product.create')">Tambah Data Gula</x-nav-link>
                </li>
                <li>
                    <x-nav-link>Fitur</x-nav-link>
                </li>
                <li>
                    <x-nav-link>Team</x-nav-link>
                </li>
                <li>
                    <x-nav-link>FAQ</x-nav-link>
                </li>
                @auth
                    <hr class="my-4 mx-auto h-1 w-48 rounded border-0 bg-gray-100 dark:bg-gray-700 md:my-10 lg:hidden">
                    <li class="lg:hidden">
                        <x-nav-link class="text-gray-900">{{ Str::headline(auth()->user()->name) }}</x-nav-link>
                    </li>
                    <li class="lg:hidden">
                        <x-nav-link :href="route('profile.edit')">Profil</x-nav-link>
                    </li>
                    @if (auth()->user()->role == 'admin')
                        <li class="lg:hidden">
                            <x-nav-link :href="route('filament.pages.dashboard')">Admin Dashboard</x-nav-link>
                        </li>
                    @endif
                    <li class="lg:hidden">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
