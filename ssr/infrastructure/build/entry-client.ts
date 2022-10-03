import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import {createApp} from './main';

const {app, router, pageProps} = createApp();

(function hydrate() {
    app.provide('pageProps', pageProps);

    router.isReady().then(() => {
        app.mount('#app', true);
    });
})();
