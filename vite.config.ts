import {UserConfig, defineConfig} from 'vite';
import path from 'path';
import vue from '@vitejs/plugin-vue';

const srcPath = path.resolve('./');

// eslint-disable-next-line max-lines-per-function
export default defineConfig(({command}) => {
    const build = command === 'build';

    const config: UserConfig = {
        base: '/',
        plugins: [vue()],
        resolve: {
            alias: {
                ssr: path.join(srcPath, 'ssr'),
                domains: path.join(srcPath, 'ssr/domains'),
                application: path.join(srcPath, 'ssr/application'),
                infrastucture: path.join(srcPath, 'ssr/infrastucture'),
            },
        },
    };
    if (build) {
        return {
            ...config,
            build: {
                ssr: true,
                rollupOptions: {
                    input: 'ssr/infrastructure/server.ts',
                },
                outDir: './dist',
                ssrManifest: true,
                emptyOutDir: true,
            },
        };
    }
    return config;
});
