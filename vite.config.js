import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import fs from "fs";
import { homedir } from "os";
import { resolve } from "path";

let host = "GulaQuestion.test";

export default defineConfig({
    server: detectServerConfig(host),
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/filament.css",
            ],
            refresh: [
                ...refreshPaths,
                "app/Http/Livewire/**",
                "app/Tables/Columns/**",
            ],
        }),
    ],
});

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.valet/Certificates/${host}.key`);
    let certificatePath = resolve(homedir(), `.valet/Certificates/${host}.crt`);

    if (!fs.existsSync(keyPath)) return {};
    if (!fs.existsSync(certificatePath)) return {};

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
