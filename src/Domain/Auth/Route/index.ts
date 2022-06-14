// import { createRoutes } from "../../../Infrastructure/Service/routes/routes";

// import login from '../page/login.vue'
// import register from '../page/register.vue'


// createRoutes('/register', register);
// createRoutes('/login', login);

// export const page = {}

export const login = { path: '/login', component: () => import('../Page/login.vue') }
export const register = { path: '/register', component: () => import('../Page/register.vue') }

