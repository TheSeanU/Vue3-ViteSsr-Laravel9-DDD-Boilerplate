import {defineConfig} from 'vite';
import vue from '@vitejs/plugin-vue';
import vueJsx from '@vitejs/plugin-vue-jsx';
import path from 'path';

const ssrPath = path.resolve('ssr');

const resolve = {
      alias: {
            Infrastructure: path.join(ssrPath, 'Infrastructure'),
            Application: path.join(ssrPath, 'Application'),
            Interface: path.join(ssrPath, 'Interface'),
            Domain: path.join(ssrPath, 'Domain'),
      },
};

export default defineConfig(({command}) => {
      if (command === 'serve')
            return {
                  root: ssrPath,
                  envDir: '../',
                  resolve,
                  plugins: [vue(), vueJsx()],
                  publicDir: 'random_non_existent_folder',
            };

      return {
            build: {
                  target: 'es2022',
                  assetsInclude: [],
                  manifest: true,
                  outDir: `public/ssr`,
                  rollupOptions: {
                        input: `ssr/main.ts`,
                  },
            },
      };
});
