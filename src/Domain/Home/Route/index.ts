import { addRoutes } from "../../../Infrastructure/Service/Router/router";
import { createRoutes } from "../../../Infrastructure/Service/Router/routes";

const home = createRoutes(
    'Home', 
    '/', 
    () => import('../Page/index.vue')
);


export const addClientRoutes = () => {
    const routes: (any)[] = [];

    if (!home) throw new Error('Login route isnt configured correct');
    routes.push(home);

    addRoutes(routes);
};
