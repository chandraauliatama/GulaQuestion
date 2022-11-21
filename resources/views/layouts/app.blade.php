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
</head>

<body>
    <header class="fixed w-full">
        @include('layouts.navigation')
    </header>

    {{ $slot }}

    @include('layouts.footer')
    @vite(['resources/js/app.js'])
    {{-- <script>
         const sections = document.querySelectorAll("section");
         const navLi = document.querySelectorAll("nav div div ul li a");
         window.onscroll = () => {
             var current = "";

             sections.forEach((section) => {
                 const sectionTop = section.offsetTop;
                 if (pageYOffset >= sectionTop - 60) {
                     current = section.getAttribute("id");
                 }
             });
             console.log(navLi)
             navLi.forEach((a) => {
                 console.log(current)
                 a.classList.remove("hidden");
                 if (a.classList.contains(current)) {
                     a.classList.add("hidden");
                 }
             });
         };
     </script> --}}
</body>

</html>
