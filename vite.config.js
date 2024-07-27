import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        port: 10000, // Cambia el puerto aquí
        proxy: {
            '/api': 'https://api-museos.onrender.com' // Proxy para la API si es necesario
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
