import {Router, createRouter as _createRouter, createMemoryHistory, createWebHistory} from 'vue-router';

const pages = import.meta.glob('../../domains/*/pages/*.vue');

const routes = Object.keys(pages).map(path => {
    const name = path.split('/').pop()?.replace('.vue', '').toLocaleLowerCase();

    return {
        path: name === 'home' ? '/' : `/${name}`,
        linkActiveClass: 'active-link',
        component: pages[path],
    };
});

export const createRouter = (): Router =>
    _createRouter({
        history: import.meta.env.SSR ? createMemoryHistory() : createWebHistory(),
        routes: [
            ...routes,
            {
                path: '/:pathMatch(.*)*',
                component: () => import('../../application/layout/404.vue'),
            },
        ],
    });
