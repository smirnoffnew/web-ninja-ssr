import Vue from 'vue';
import Router from 'vue-router';
import HomeTestComponent from "./pages/home/HomeTestComponent";
import LoginTestComponent from "./pages/login/LoginTestComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/test',
    routes: [
        { path: '/', component: HomeTestComponent, name: 'home' },
        { path: '/login', component: LoginTestComponent, name: 'login' },
    ]
});
