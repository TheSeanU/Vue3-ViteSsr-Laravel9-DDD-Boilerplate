import { defineConfig, loadEnv } from 'vite'
import vue from '@vitejs/plugin-vue'
import 'dotenv/config';

export default ({mode}) => {
  Object.assign(process.env, loadEnv(mode, process.cwd(), ''))

  return defineConfig({
    root: "./vue",
    plugins: [vue()],
  })
}
