require('./bootstrap');

window.Vue = require("vue");
require("./bootstrap");
window.Fire = new Vue();

// load vue router and use it ----------
import VueRouter from "vue-router"; // import vue router
Vue.use(VueRouter);

import index from "./components/offers";
import notFound from "./components/not-found";

let routes = [
    {
        path: "/",
        name: "Index",
        component: index
    },
    {
        path: "*",
        name: "any",
        component: notFound
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

window.Router = router;

// vform plugin
import { Form, HasError, AlertError } from "vform";
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

const app = new Vue({
    el: "#app",
    router,
});

