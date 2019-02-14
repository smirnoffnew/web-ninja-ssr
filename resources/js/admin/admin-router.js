import Vue from 'vue';
import Router from 'vue-router';
import HomePage from "./pages/home/HomeAdminComponent";
import LoginPage from "./pages/login/LoginAdminComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/admin',
    routes: [
        { path: '/', component: HomePage, name: 'home' },
        { path: '/login', component: LoginPage, name: 'login' },
    ]
});
