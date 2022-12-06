import "./bootstrap";

import "flowbite";

import Focus from "@alpinejs/focus";
import FormsAlpinePlugin from "../../vendor/filament/forms/dist/module.esm";
import NotificationsAlpinePlugin from "../../vendor/filament/notifications/dist/module.esm";

Alpine.plugin(Focus);
Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(NotificationsAlpinePlugin);

import Alpine from "alpinejs";

// import { flowbite } from "flowbite";

window.Alpine = Alpine;

// window.flowbite = flowbite;

Alpine.start();
