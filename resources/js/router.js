import Vue from 'vue';
import Router from 'vue-router';
import HomeClientPage from "./components/HomeClientPage";
import LoginPage from "./components/LoginPage";
import RegistrationPage from "./components/RegistrationPage";

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/client',
    routes: [
        { path: '/', component: HomeClientPage, name: 'home' },
        { path: '/login', component: LoginPage, name: 'login' },
        { path: '/registration', component: RegistrationPage, name: 'registration' }
    ]
});
