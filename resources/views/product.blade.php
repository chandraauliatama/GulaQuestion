<x-app-layout>
    <div class="container mx-auto flex flex-col items-center px-6 pt-28 pb-12">
        <div x-data="{ open: false }">
            {{-- Scan Toogle --}}
            <div x-show="open" id="reader" width="500px"></div>
            <x-primary-button x-on:click="open = ! open" class="w-48">Cari
                dengan QRCODE</x-primary-button>

            @livewire('list-products')
        </div>
    </div>
    <script type="module">
        function onScanSuccess(decodedText, decodedResult) {
            Livewire.emitTo('list-products', 'qrcode', decodedText)
        }
        let config = {
            fps: 10,
            qrbox: {
                width: 700,
                height: 700
            },
            rememberLastUsedCamera: false,
            formatsToSupport: [Html5QrcodeSupportedFormats.QR_CODE],
            // Only support camera scan type.
            supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_FILE, Html5QrcodeScanType.SCAN_TYPE_CAMERA]
        }
        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", config,
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</x-app-layout>
