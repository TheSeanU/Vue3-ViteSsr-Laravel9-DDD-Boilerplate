import { createRouter, createWebHistory } from "vue-router";
import { BASE_URL } from '../constants'

import { register } from "../../../Domain/Auth/Route";
import { home } from "../../../Domain/Home/Route";

import { refRoutes } from './routes';

const router = createRouter({
    routes: [register, home],
    history: createWebHistory(BASE_URL),
});

// router.beforeEach((to, from, next) => {
//     router.addRoute(refRoutes.value)
// })

router.beforeEach((to, from, next) => {
    for (const some of refRoutes.value) {
        if (some(to, from, next)) return next(false);
    }
    return next();
})



console.log(refRoutes.value);

// router.push(refRoutes);

export default router;

