import {createApp} from 'vue';
import App from './App';
import router from 'Infrastructure/Service/Router/router';

import 'bootstrap/dist/css/bootstrap.min.css';

createApp(App).use(router).mount('#app');