import { createRouter, createWebHistory } from 'vue-router'

import {login, register} from '../../Auth/Route/index'
import {home} from '../../Home/Route/index'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    home,
    login,
    register
  ]
})

export default router
