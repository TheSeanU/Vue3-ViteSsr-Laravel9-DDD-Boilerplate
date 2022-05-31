import { createRoutes } from "../../../Infrastructure/Service/routes/routes";

import login from '../page/login.vue'
import register from '../page/register.vue'


createRoutes('/register', register);
createRoutes('/login', login);

export const page = {}


