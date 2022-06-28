import { createRouter, createWebHistory} from "vue-router";
import { BASE_URL } from '../constants'


const routes = [
    {
        name: "home",
        path: '/',
        component: () => import('../../../Domain/Home/Page/index.vue')    
    },
    {
        name: "login",
        path: '/login',
        component: () => import('../../../Domain/Auth/Page/Login.vue')    
    },
    {
        name: "register",
        path: '/register',
        component: () => import('../../../Domain/Auth/Page/register.vue')    
    },
];

const router = createRouter({
    history: createWebHistory(BASE_URL),
    routes: routes,
});

// export const addRoutes = (routes: any[]) => {    
//     for (const route of routes) router.addRoute(route);
// };

export default router;

