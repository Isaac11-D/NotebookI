import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig({
    base: '/build/', //  esto es clave para producción
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        https: {
            key: fs.readFileSync('certificates/server.key'),
            cert: fs.readFileSync('certificates/server.crt'),
        },
        host: 'localhost',
    },
});
