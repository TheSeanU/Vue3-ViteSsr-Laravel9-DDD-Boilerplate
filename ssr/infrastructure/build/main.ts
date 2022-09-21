import {createRouter} from 'ssr/application/services/router';
import {createSSRApp} from 'vue';
import BasicLayout from 'ssr/application/layout/BasicLayout.vue';

export const createApp = () => {
    const pageProps = {
        // mounted(el: {id: any}, binding: {value: any}) {
        //     // client-side implementation:
        //     // directly update the DOM
        //     el.id = binding.value;
        // },
        // getSSRProps(binding: {value: any}) {
        //     // server-side implementation:
        //     // return the props to be rendered.
        //     // getSSRProps only receives the directive binding.
        //     return {
        //         id: binding.value,
        //     };
        // },
    };

    const app = createSSRApp(BasicLayout, pageProps);
    const router = createRouter();

    app.use(router);

    return {app, pageProps, router};
};
