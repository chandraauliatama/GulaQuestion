<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.meta')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body>
    <header class="fixed w-full">
        @include('layouts.navigation')
    </header>

    {{ $slot }}

    @include('layouts.footer')
    @livewire('notifications')
</body>

</html>
