import { createRoutes } from "../../../Infrastructure/Service/routes/routes";

createRoutes('/', () => import('../Page/index.vue'));

export const home = {}
