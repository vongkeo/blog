require("./bootstrap");
window.Vue = require("vue");
Vue.config.productionTip = false;

import router from "~/routes.js";
import App from "~/views/App";
import Default from "~/layouts/default";

Vue.component("default", Default);

const app = new Vue({
    el: "#app",
    router,
    render: h => h(App)
});

export default app;
