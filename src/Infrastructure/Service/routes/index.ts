import { createRouter, createWebHistory } from "vue-router";
import { BASE_URL } from '../constants'
// import { routes } from './routes'

import { login, register } from "../../../Domain/Auth/Route";
import { home } from "../../../Domain/Home/Route";

const router = createRouter({
    routes: [login, register, home],
    history: createWebHistory(BASE_URL),
});


export default router;

