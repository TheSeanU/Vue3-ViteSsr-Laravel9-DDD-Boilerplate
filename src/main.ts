import { createApp } from "vue";
import App from "./App.vue";
import router from "./Infrastructure/Service/routes/index";

import "bootstrap/dist/css/bootstrap.min.css";

createApp(App, {}).use(router).mount('#app')




