import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueJsx from '@vitejs/plugin-vue-jsx'

export default defineConfig(() => {


  return {
    root: "src",
    envDir: "../",
    tsconfig: "../tsconfig",
    plugins: [vue(), vueJsx()],
  }
})
