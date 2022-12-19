<x-dynamic-component class="flex justify-center"
                     :component="$getFieldWrapperView()"
                     :id="$getId()"
                     :state-path="$getStatePath()">
    @if ($getRecord()->getFirstMediaUrl('images1') == null)
        Gambar Tidak Tersedia
    @endif
    <img src="{{ $getRecord()->getFirstMediaUrl('images2') }}" alt="" class="w-full">
</x-dynamic-component>
