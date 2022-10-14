import {RouterLink} from 'vue-router';
import {createRouter} from 'ssr/application/services/router';
import {createSSRApp} from 'vue';
import BasicLayout from 'ssr/application/layout/BasicLayout.vue';

export const createApp = () => {
    const pageProps = {
        // @ts-ignore needed
        ...RouterLink.props,
        inactiveClass: String,
    };

    const app = createSSRApp(BasicLayout, pageProps);
    const router = createRouter();

    app.use(router);

    return {app, pageProps, router};
};
