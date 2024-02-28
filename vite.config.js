import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
 
export default ({ mode }) => {
    const { APP_URL } = loadEnv(mode, process.cwd(), '')
 
    return defineConfig({
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/css/common.scss',
                    'resources/js/app.js',
                    'resources/js/latest-books.js',
                    'resources/js/book-search.js',

                    'resources/js/user-list/main.jsx'
                ],
                refresh: true,
            }),
            react(),
            {
                name: 'css-static-url-fixer',
                enforce: 'post',
                apply: 'serve',
                transform: (code, file) => {
                    if (mode === 'development' && file.match(/\.s?css($|\?)/)) {
                        return {
                            code: code.replaceAll(/url\(([\'\"]?)(\/[^\)\'\"]+)\1\)/g, `url($1${APP_URL}$2$1)`)
                        }
                    }
                },
            },
        ],
    });
}