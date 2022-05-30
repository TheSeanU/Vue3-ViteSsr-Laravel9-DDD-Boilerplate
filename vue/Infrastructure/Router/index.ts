import { ref, type Component } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import { BASE_URL } from '../Constants/constants'
import { register } from "../../Domain/Auth/Route/index";
import { home } from "../../Domain/Home/Route/index";

type routeTypes = {
    path: string,
    component: Object,
}

const routes = ref({} as routeTypes);

export const createRoutes = (path: string, component: Component) =>
    Object.assign(routes.value, { path, component });

createRoutes('/login', () => import('../../domain/Auth/Page/index.vue'))

const router = createRouter({
    history: createWebHistory(BASE_URL),

    routes: [home, register, routes.value],
});

export default router;
