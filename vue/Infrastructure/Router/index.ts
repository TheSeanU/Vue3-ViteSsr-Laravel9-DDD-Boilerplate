import { createRouter, createWebHistory } from "vue-router";

import { login, register } from "../../Domain/Auth/Route/index";
import { home } from "../../Domain/Home/Route/index";

const BASE_URL = import.meta.env.BASE_URL;

const router = createRouter({
    history: createWebHistory(BASE_URL),

    routes: [home, login, register],
});

export default router;
