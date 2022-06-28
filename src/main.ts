import { createApp, type PropType } from "vue";
import App from "./App";
import router from "./Infrastructure/Service/Router/router";

import "bootstrap/dist/css/bootstrap.min.css";
import { me } from "./Infrastructure/Service/auth";

try {
    me()
} catch (_) {
    //
}
finally {
    createApp(App).use(router).mount('#app')
}





