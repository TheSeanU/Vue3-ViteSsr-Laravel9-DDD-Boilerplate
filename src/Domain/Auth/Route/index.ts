import { createRoutes } from '../../../Infrastructure/Service/Router/routes';

// export const login = { path: '/login', component: () => import('../Page/login.vue') }
export const register = { path: '/register', component: () => import('../Page/register.vue') }

createRoutes("/login", () => import("../Page/login.vue"));
