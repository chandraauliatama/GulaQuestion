@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 pl-3 pr-4 text-white bg-green-500 rounded lg:bg-transparent lg:text-green-500 lg:p-0 dark:text-white hover:cursor-pointer' : 'block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 hover:cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
