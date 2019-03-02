import Vue from 'vue';
import Router from 'vue-router';
import LoginComponent from "./components/LoginComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        { path: '/admin',                       component: LoginComponent,                 name: 'home' },
        { path: '/admin/login',                 component: LoginComponent,                 name: 'login' }
    ]
});

