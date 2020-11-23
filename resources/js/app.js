require("./bootstrap");
window.Vue = require("vue");
import router from "~/routes.js";
import App from "~/views/App";
import Default from "~/layouts/default";

Vue.component("default", Default);

const app = new Vue({
    router,
    el: "#app",
    render: h => h(App)
});

export default app;
