{{-- <button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'block w-32 bg-red-500 mt-5 py-2 rounded-2xl hover:bg-red-600 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 active:bg-red-600 focus:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:bg-red-600']) }}>
    {{ $slot }}
</button>
