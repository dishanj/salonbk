/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
import moment from "moment";
import { Form, HasError, AlertError } from "vform";

import swal from "sweetalert2";
window.swal = swal;

window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

Vue.use(VueRouter);

let routes = [
    { path: "/developer", component: require("./components/Developer.vue") },
    { path: "/dashboard", component: require("./components/Dashboard.vue") },
    { path: "/profile", component: require("./components/Profile.vue") },
    { path: "/users", component: require("./components/Users.vue") },
    {
        path: "/businesshours",
        component: require("./components/BusinessHours.vue")
    }
];

let router = new VueRouter({
    mode: "history",
    routes // short for `routes: routes`
});

Vue.filter("capitalize", function(text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
});

//
Vue.filter("myDate", function(created) {
    return moment(created).format("MMMM Do YYYY, h:mm:ss a");
});

//custom event
window.Fire = new Vue();

Vue.component("passport-clients", require("./components/passport/Clients.vue"));

Vue.component(
    "passport-authorized-clients",
    require("./components/passport/AuthorizedClients.vue")
);

Vue.component(
    "passport-personal-access-tokens",
    require("./components/passport/PersonalAccessTokens.vue")
);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue")
);

const app = new Vue({
    el: "#app",
    router
});
