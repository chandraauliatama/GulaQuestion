<x-app-layout>
    <div>
        <!-- Start block -->
        <section class="bg-white dark:bg-gray-900">
            <div
                 class="mx-auto grid max-w-screen-xl px-4 pt-20 pb-8 lg:grid-cols-12 lg:gap-8 lg:py-16 lg:pt-28 xl:gap-0">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div class="mb-6 lg:hidden">
                        <img src="{{ asset('images/hero.png') }}" alt="hero image">
                    </div>
                    <h1
                        class="mb-4 max-w-2xl text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
                        Kandungan Gula <br>Dengan Takaran Sendok.
                    </h1>
                    <p class="mb-6 max-w-2xl font-light text-gray-500 dark:text-gray-400 md:text-lg lg:mb-8 lg:text-xl">
                        Selamat datang di GulaQuestion. Sekarang, kamu dapat dengan mudah mengukur asupan gulamu setiap harinya dan menjaga kesehatan dengan lebih baik. Nikmati kemudahan dan keuntungan dari GulaQuestion. Ayo mulai sekarang!
                    </p>
                    <a href="{{ route('product.index') }}"
                       class="mb-2 inline-flex items-center rounded-lg bg-[#79c39b] px-3 py-2 text-center text-sm font-semibold text-white transition-all duration-500 hover:-translate-y-1 hover:bg-[#20ba67] focus:-translate-y-1 focus:bg-[#20ba67] focus:outline-none focus:ring-2 focus:ring-[#20ba67] focus:ring-offset-2 active:bg-[#20ba67]">
                        Lihat Data Gula
                        <svg aria-hidden="true" class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden lg:col-span-5 lg:mt-0 lg:flex">
                    <img src="{{ asset('images/hero.png') }}" alt="hero image">
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-800" id="manfaat">
            <div class="lg:py- mx-auto max-w-screen-xl space-y-12 px-4 py-8 lg:space-y-20 lg:px-6">
                <!-- Row -->
                <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                    <div class="text-gray-500 dark:text-gray-400 sm:text-lg">
                        <div class="mb-6 lg:hidden">
                            <img src="{{ asset('images/feature-1.png') }}" alt="hero image">
                        </div>
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            Manfaat Qula Question untukmu
                        </h2>
                        <p class="mb-8 font-light lg:text-xl">
                            Beberapa manfaat yang bisa kamu dapatkan ketika menggunakan Gula Question, pedulilah dengan
                            takaran konsumsi gulamu sebelum hal membahayakan terjadi.
                        </p>
                        <!-- List -->
                        <ul role="list" class="my-7 space-y-5 border-t border-gray-200 pt-8 dark:border-gray-500">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    Temukan Produk Relevan
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    Takar Kandungan Gula
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span
                                      class="text-base font-medium leading-tight text-gray-900 dark:text-white">Meningkatkan
                                    Awareness</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    Beri Saran Kesehatan
                                </span>
                            </li>
                        </ul>
                        <p class="mb-8 font-light lg:text-xl">
                            Program akan terus dikembangkan supaya benefit yang didapatkan lebih banyak.
                        </p>
                    </div>
                    <img class="mb-4 hidden w-full rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/feature-1.png') }}"
                         alt="dashboard feature image">
                </div>
                <!-- Row -->
                <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                    <img class="mb-4 hidden w-full rounded-lg lg:mb-0 lg:flex" src="{{ asset('images/feature-2.png') }}"
                         alt="feature image 2">
                    <div class="text-gray-500 dark:text-gray-400 sm:text-lg">
                        <div class="mb-6 lg:hidden">
                            <img src="{{ asset('images/feature-2.png') }}" alt="hero image">
                        </div>
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Bahaya
                            Gula Berlebihan</h2>
                        <p class="mb-8 font-light lg:text-xl">Berdasarkan keterangan P2PTM Kemenkes RI , Konsumsi gula
                            berlebihan memiliki banyak efek buruk bagi kesehatan kita, beberapa diantaranya adalah.</p>
                        <!-- List -->
                        <ul role="list" class="my-7 space-y-5 border-t border-gray-200 pt-8 dark:border-gray-500">
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                    Meningkatkan risiko penyakit Diabetes
                                </span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span
                                      class="text-base font-medium leading-tight text-gray-900 dark:text-white">Meningkatkan
                                    risiko tekanan darah tinggi</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span
                                      class="text-base font-medium leading-tight text-gray-900 dark:text-white">Penurunan
                                    Daya Ingat</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Penuaan
                                    Dini</span>
                            </li>
                            <li class="flex space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span
                                      class="text-base font-medium leading-tight text-gray-900 dark:text-white">Peningkatan
                                    berat badan</span>
                            </li>
                        </ul>
                        <p class="font-light lg:text-xl">Masih banyak hal buruk akan menimpa kesehatanmu jika komsumsi
                            gulamu terlalu banyak.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-white dark:bg-gray-900" id="fitur">
            <div
                 class="mx-auto max-w-screen-xl items-center px-4 py-8 lg:grid lg:grid-cols-4 lg:gap-16 lg:py-24 lg:px-6 xl:gap-24">
                <div class="col-span-2 mb-8">
                    <p class="text-lg font-medium text-green-500">Fitur Website</p>
                    <h2
                        class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white md:text-3xl">
                        Fitur Website Gula Question</h2>
                    <p class="font-light text-gray-500 dark:text-gray-400 sm:text-xl">Beberapa fitur yang kami
                        sediakan
                        pada website ini.</p>
                    <div class="mt-6 space-y-4 border-t border-gray-200 pt-6 dark:border-gray-700">
                        <div>
                            <a href="#"
                               class="inline-flex items-center text-base font-medium text-green-500 hover:text-green-500">
                                Mudah digunakan
                                <svg class="ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#"
                               class="inline-flex items-center text-base font-medium text-green-500 hover:text-green-500">
                                Responsif dan Interaktif
                                <svg class="ml-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                    <div>
                        <svg class="mb-2 h-10 w-10 text-green-500 dark:text-green-500 md:h-12 md:w-12" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Lihat Data Gula</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">
                            Tampilkan informasi gula pada produk dengan skala sendok
                        </p>
                    </div>
                    <div>
                        <svg class="mb-2 h-10 w-10 text-green-500 dark:text-green-500 md:h-12 md:w-12" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Bantu Isi Data</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Merasa data produk tidak lengkap? anda
                            bisa
                            ikut membantu mengisi data untuk membantu sesama</p>
                    </div>
                    <div>
                        <svg class="mb-2 h-10 w-10 text-green-500 dark:text-green-500 md:h-12 md:w-12" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Koreksi Data</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Melihat data yang tidak sesuai? anda
                            bisa
                            memberikan koreksi pada data tersebut</p>
                    </div>
                    <div>
                        <svg class="mb-2 h-10 w-10 text-green-500 dark:text-green-500 md:h-12 md:w-12" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-2xl font-bold dark:text-white">Saran Kesehatan</h3>
                        <p class="font-light text-gray-500 dark:text-gray-400">Baca artikel artikel mengenai kesehatan
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl px-4 py-8 text-center lg:py-24 lg:px-6">
                <figure class="mx-auto max-w-screen-md">
                    <svg class="mx-auto mb-3 h-12 text-gray-400 dark:text-gray-500" viewBox="0 0 24 27"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                              d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                              fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-xl font-medium text-gray-900 dark:text-white md:text-2xl">"Yang terbesar dari
                            kebodohan adalah mengorbankan kesehatan untuk jenis lain dari kebahagiaan."</p>
                    </blockquote>
                    <figcaption class="mt-6 flex items-center justify-center space-x-3">
                        <img class="h-6 w-6 rounded-full"
                             src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                             alt="profile picture">
                        <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                            <div class="pr-3 font-medium text-gray-900 dark:text-white">Arthur Schopenhauer</div>
                            <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Tokoh Filsafat</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-gray-50 dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2
                        class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                        Bantu Kami Menyehatkan Masyarakat</h2>
                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Usaha kamu sangat berarti
                        bagi
                        orang lain dengan data gula yang kamu isikan</p>
                    <a href="{{ route('product.create') }}"
                       class="mr-2 mb-2 rounded-lg bg-[#79c39b] px-5 py-2.5 text-sm font-medium text-white hover:bg-[#79c39b] focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
                        Data Gula</a>
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-white dark:bg-gray-900" id="team">
            <div class="mx-auto max-w-screen-xl px-4 py-8 lg:py-24 lg:px-6">
                <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Team Creator
                    </h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">Website ini dikerjakan
                        dengan
                        beberapa orang yang memiliki job masing - masing.</p>
                </div>
                <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-4 lg:space-y-0 xl:gap-10">
                    <!-- Pricing Card -->
                    <div
                         class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-500 dark:bg-gray-800 dark:text-white xl:p-8">
                        <h3 class="mb-4 text-xl font-semibold">Nadhif Ali Ikhsani</h3>

                        <!-- List -->
                        <ul role="list" class="mt-3 mb-8 space-y-4 text-left">
                            <li class="flex items-center justify-center space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span>Front End Developer</span>
                            </li>

                        </ul>
                    </div>
                    <div
                         class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-500 dark:bg-gray-800 dark:text-white xl:p-8">
                        <h3 class="mb-4 text-xl font-semibold">Chandra Aulia Tama</h3>
                        <!-- List -->
                        <ul role="list" class="mt-3 mb-8 space-y-4 text-left">
                            <li class="flex items-center justify-center space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span>Back End Developer</span>
                            </li>

                        </ul>
                    </div>
                    <!-- Pricing Card -->
                    <div
                         class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-500 dark:bg-gray-800 dark:text-white xl:p-8">
                        <h3 class="mb-4 text-xl font-semibold">M.Rehza Pahlevi</h3>
                        <!-- List -->
                        <ul role="list" class="mt-3 mb-8 space-y-4 text-left">
                            <li class="flex items-center justify-center space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="mx-auto">UI / UX Designer</span>
                            </li>

                        </ul>

                    </div>
                    <!-- Pricing Card -->
                    <div
                         class="mx-auto flex max-w-lg flex-col rounded-lg border border-gray-100 bg-white p-6 text-center text-gray-900 shadow dark:border-gray-500 dark:bg-gray-800 dark:text-white xl:p-8">
                        <h3 class="mb-4 text-xl font-semibold">Samy Zaidan</h3>
                        <!-- List -->
                        <ul role="list" class="mt-3 mb-8 space-y-4 text-left">
                            <li class="flex items-center justify-center space-x-3">
                                <!-- Icon -->
                                <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span>Data Collector</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End block -->

        <!-- Start block -->
        <section class="bg-white dark:bg-gray-900" id="faq">
            <div class="mx-auto max-w-screen-xl px-4 pb-8 lg:px-6 lg:pb-24">
                <h2
                    class="mb-6 text-center text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white lg:mb-8 lg:text-3xl">
                    Frequently asked questions</h2>
                <div class="mx-auto max-w-screen-md">
                    <div id="accordion-flush" data-accordion="collapse"
                         data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                         data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h3 id="accordion-flush-heading-1">
                            <button type="button"
                                    class="flex w-full items-center justify-between border-b border-gray-200 bg-white py-5 text-left font-medium text-gray-900 dark:border-gray-700 dark:bg-gray-900 dark:text-white"
                                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                    aria-controls="accordion-flush-body-1">
                                <span>Apa Latar belakang dibuatnya website?</span>
                                <svg data-accordion-icon="" class="h-6 w-6 shrink-0 rotate-180" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h3>
                        <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                            <div class="border-b border-gray-200 py-5 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Ide awal dari aplikasi/website kami
                                    adalah untuk mengumpulkan informasi
                                    kandungan gula pada makanan/minuman kemasan. Kami memilih makanan/minuman
                                    kemasan karena biasanya atau hampir pada semua bungkus dari makanan/minuman
                                    tersebut terdapat informasi mengenai kandungan gula produk tersebut. Dari
                                    kandungan gula tersebut yang biasanya dituliskan dalam satuan gram akan kami
                                    visualisasikan ke dalam bentuk sendok..</p>
                            </div>
                        </div>
                        <h3 id="accordion-flush-heading-3">
                            <button type="button"
                                    class="flex w-full items-center justify-between border-b border-gray-200 py-5 text-left font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                    aria-controls="accordion-flush-body-3">
                                <span>Komponen apa saja yang digunakan dalam pembuatan website?</span>
                                <svg data-accordion-icon="" class="h-6 w-6 shrink-0" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h3>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="border-b border-gray-200 py-5 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk bagian desain kita mengandalkan
                                    tailwind css dan popper.js, sementara untuk akses data dan fungsi kita gunakan
                                    laravel
                                    dikolaborasi dengan package filament.</p>
                            </div>
                        </div>
                        <h3 id="accordion-flush-heading-4">
                            <button type="button"
                                    class="flex w-full items-center justify-between border-b border-gray-200 py-5 text-left font-medium text-gray-500 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                                    aria-controls="accordion-flush-body-4">
                                <span>Bagaimana alur kerja website ini?</span>
                                <svg data-accordion-icon="" class="h-6 w-6 shrink-0" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h3>
                        <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                            <div class="border-b border-gray-200 py-5 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">User bisa melihat komposisi produk
                                    setelah login, user juga bisa mengisikan data gula yang nanti akan ditinjau oleh
                                    admin
                                    / pengelola</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End block -->
    </div>
</x-app-layout>
