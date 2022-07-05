import {defineConfig} from 'vite';
import vue from '@vitejs/plugin-vue';
import vueJsx from '@vitejs/plugin-vue-jsx';
import path from 'path';

const srcPath = path.resolve('src');

const resolve = {
      alias: {
            Infrastructure: path.join(srcPath, 'Infrastructure'),
            Application: path.join(srcPath, 'Application'),
            Interface: path.join(srcPath, 'Interface'),
            Domain: path.join(srcPath, 'Domain'),
      },
};

export default defineConfig(({command}) => {
      if (command === 'serve')
            return {
                  root: srcPath,
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
                  outDir: `public/src`,
                  rollupOptions: {
                        input: `src/main.ts`,
                  },
            },
      };
});
