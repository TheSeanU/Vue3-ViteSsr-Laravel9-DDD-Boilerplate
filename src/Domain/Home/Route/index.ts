import { createRoutes } from "../../../Infrastructure/Service/Router/routes";

createRoutes('/', () => import('../Page/index.vue'));

export const home = { path: '/', component: () => import('../Page/index.vue') }
