import { createApp } from "vue";
import App from "./App.vue";
import router from "./Infrastructure/Service/Router/router";

import "bootstrap/dist/css/bootstrap.min.css";
import { me } from "./Infrastructure/Service/auth";

try {
    me()
} catch (_) {
    //
}
finally {
    createApp(App, {}).use(router).mount('#app')
}





