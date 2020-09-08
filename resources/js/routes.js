import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import home from "~/pages/home";
import about from "~/pages/about";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: home
        },
        {
            path: "/about",
            name: "about",
            component: about
        }
    ]
});

export default router;
