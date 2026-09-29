import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    const port = Number.parseInt(env.VITE_PORT ?? '5173', 10);

    if (!Number.isInteger(port)) {
        throw new Error('VITE_PORT must be a valid integer');
    }

    return {
        server: {
            host: '0.0.0.0',
            port,
            strictPort: true,
            hmr: {
                host: 'localhost'
            },
        },
        plugins: [
            laravel({
                input: [
                    'resources/scss/app.scss',
                    'resources/js/app.js'
                ],
                refresh: true,
            }),
            tailwindcss(),
        ],
    };
});
