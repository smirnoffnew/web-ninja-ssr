import Vue from 'vue'
import Router from 'vue-router'

import HomeClientPage from "./components/HomeClientPage";
import LoginPage from "./components/LoginPage";
import RegistrationPage from "./components/RegistrationPage";

Vue.use(Router);


export default new Router({
    mode: 'history',
    routes: [
        { path: '/', component: HomeClientPage('Home'), name: 'HomeClientPage' },
        { path: '/login', component: LoginPage('Login'), name: 'LoginPage' },
        { path: '/registration', component: RegistrationPage('Contact'), name: 'RegistrationPage' }
    ]
});
