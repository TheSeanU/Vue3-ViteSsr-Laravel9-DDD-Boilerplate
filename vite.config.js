import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  envDir: "../",
  root: "./Vue",
  plugins: [vue()],
})
