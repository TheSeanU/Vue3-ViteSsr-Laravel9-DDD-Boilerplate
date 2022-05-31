import { createRouter, createWebHistory } from "vue-router";
import { BASE_URL } from '../Constants/constants'

import { routes } from '../Service/routes'

import { page } from "../../Domain/Auth/Route";
import { home } from "../../Domain/Home/Route";

const router = createRouter({
    routes: routes.value,
    history: createWebHistory(BASE_URL),
});

export default router;

