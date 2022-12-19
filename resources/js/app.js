import "./bootstrap";

import "flowbite";

import Focus from "@alpinejs/focus";
import FormsAlpinePlugin from "../../vendor/filament/forms/dist/module.esm";
import AlpineFloatingUI from "@awcodes/alpine-floating-ui";
import NotificationsAlpinePlugin from "../../vendor/filament/notifications/dist/module.esm";

import {
    Html5QrcodeScanner,
    Html5QrcodeSupportedFormats,
    Html5QrcodeScanType,
} from "html5-qrcode";

window.Html5QrcodeScanner = Html5QrcodeScanner;
window.Html5QrcodeSupportedFormats = Html5QrcodeSupportedFormats;
window.Html5QrcodeScanType = Html5QrcodeScanType;

Alpine.plugin(Focus);
Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(AlpineFloatingUI);
Alpine.plugin(NotificationsAlpinePlugin);

import Alpine from "alpinejs";

// import { flowbite } from "flowbite";

window.Alpine = Alpine;

// window.flowbite = flowbite;

Alpine.start();
