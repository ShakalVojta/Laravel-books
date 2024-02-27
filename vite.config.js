import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
 
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
                    'resources/css/style.css'
                ],
                refresh: true,
            }),
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