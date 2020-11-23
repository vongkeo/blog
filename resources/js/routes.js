import Vue from "vue";
import VueRouter from "vue-router";

import home from "~/pages/home";
import about from "~/pages/about";
import blog from "~/pages/blog";
import contact from "~/pages/contact";
import login from "~/pages/login";
import register from "~/pages/register";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: home
        },
        {
            path: "/blog",
            name: "blog",
            component: blog
        },
        {
            path: "/contact",
            name: "contact",
            component: contact
        },
        {
            path: "/about",
            name: "about",
            component: about
        },
        {
            path: "/login",
            name: "login",
            component: login
        },
        {
            path: "/register",
            name: "register",
            component: register
        }
    ]
});

export default router;
