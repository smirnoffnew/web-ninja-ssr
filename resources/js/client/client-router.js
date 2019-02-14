import Vue from 'vue';
import Router from 'vue-router';
import HomeClientPage from "./pages/home/HomeClientComponent";
import LoginPage from "./pages/login/LoginClientComponent";
import RegistrationPage from "./pages/registration/RegistrationClientComponent";

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
