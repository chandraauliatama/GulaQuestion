<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">Hapus Akun</h2>
        <p class="mt-1 text-sm text-gray-600">Setelah kamu menghapus akun, semua data dan resource mengenai akunmu akan
            dihapus. Sebelum menghapus harap pertimbagkan keputusannmu</p>
    </header>

    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">Hapus
        Akun</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">Kamu yakin ingin menghapus akunmu?</h2>
            <p class="mt-1 text-sm text-gray-600">Setelah akunmu dihapus, semua sumber daya dan datanya akan dihapus
                secara permanen. Masukkan kata sandi kamu untuk mengonfirmasi bahwa kamu ingin menghapus akunmu secara
                permanen.</p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="sr-only" />

                <x-text-input id="password" name="password" type="password"
                    class="mt-1 block w-full focus:border-red-500 focus:ring-red-500" placeholder="Password" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Batal') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Hapus Akun') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
