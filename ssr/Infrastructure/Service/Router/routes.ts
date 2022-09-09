import {type Component} from "vue";

export const createRoutes = (
    name: string, 
    path: string, 
    component: Component
    ) => {
    return {
        name,
        path,
        component
    }
};

