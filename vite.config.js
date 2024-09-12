import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            external: ['vue'],
            output: {
                paths: {
                    vue: 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'
                }
            }
        }
    }
});
