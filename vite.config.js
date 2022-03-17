import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  envDir: "../",
  root: "./vue",
  plugins: [vue()],
})
