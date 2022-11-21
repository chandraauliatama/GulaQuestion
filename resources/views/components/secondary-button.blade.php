{{-- <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}

<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'block w-32 bg-gray-400 border border-gray-500 mt-5 py-2 rounded-2xl hover:bg-gray-600 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2 active:bg-gray-600 focus:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2 focus:bg-gray-600']) }}>
    {{ $slot }}
</button>
