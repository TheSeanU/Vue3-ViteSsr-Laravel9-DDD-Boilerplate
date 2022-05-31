import { createRoutes } from "../../../Infrastructure/Service/routes";

createRoutes('/register', () => import('../Page/register.vue'));
createRoutes('/login', () => import('../Page/login.vue'));

export const page = {}


