import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import {createApp} from './main';

const {app, router, pageProps} = createApp();

// this is for ssr testing
router.beforeResolve((_to, _from) => {
    console.log(pageProps);
});

router.isReady().then(() => app.mount('#app', true));
