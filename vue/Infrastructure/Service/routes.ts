import { computed, type Component } from "vue";

type routeTypes = {
    path: string,
    component: Component,
}

export const routes = computed(() => { return [] as routeTypes[] });

export function createRoutes(path: string, component: Component) {
    return routes.value.push({ path, component });
}

// export class createRoutes {
//     constructor() {

//     }
// }
