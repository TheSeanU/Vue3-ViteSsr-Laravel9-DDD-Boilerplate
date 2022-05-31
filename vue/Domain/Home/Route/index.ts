import { createRoutes } from "../../../Infrastructure/Service/routes";

createRoutes('/', () => import('../Page/index.vue'));

export const home = {}
