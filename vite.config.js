import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default () => {

  return defineConfig({
    envDir: "../",
    root: "./vue",
    plugins: [vue()],
  })
}
