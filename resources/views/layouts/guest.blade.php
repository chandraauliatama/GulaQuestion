<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gula Question - Cek Takaran Gula</title>
    <!-- Meta SEO -->
    <meta name="title" content="Gula Question - Takaran Gula">
    <meta name="description" content="Lihat Kandungan Gula dengan Skala Sendok.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Indonesian">
    <meta name="author" content="GulaQuestien Team">

    <!-- Social media share -->
    <meta property="og:title" content=Gula Question - Takaran Gula>
    <meta property="og:site_name" content=GulaQuestion>
    {{-- <meta property="og:url" content=https://https://demo.themesberg.com/landwind /> --}}
    <meta property="og:description" content=Tingkatkan awareness konsumsi gula harian mu, ayo cek kandungan gula pada
        produk dengan skala sendok>
    <meta name="twitter:card" content="summary" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/css/app.css'])
    <style>
        .login_img_section {
            background: #79c39b;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
            <div class="bg-black opacity-20 inset-0 z-0"></div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">

                {{ $image }}

                <p class="text-white font-bold mt-1">Cari Kandungan gula pada produk pilihanmu!</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a href="{{ route('home') }}"
                        class=" hover:bg-[#79c39b]hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-[#79c39b] mt-4 px-4 py-2 rounded-2xl font-bold mb-2">
                        Get Started
                    </a>
                </div>
            </div>
        </div>

        {{ $slot }}

    </div>
    @vite(['resources/js/app.js'])
</body>

</html>
