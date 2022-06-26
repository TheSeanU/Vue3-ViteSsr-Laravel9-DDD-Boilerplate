import { ref, type Component } from "vue";
import router from "./router";
import RouteConfig from 'vue-router'

export const refRoutes = ref([] as any);


export const addRoutes = (routes: RouteConfig[]) => {
    for (const route of routes) router.addRoute(route);
};
