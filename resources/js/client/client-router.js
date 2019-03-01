import Vue from 'vue';
import Router from 'vue-router';
import LoginComponent from "./components/LoginComponent";
import RegistrationComponent from "./components/RegistrationComponent";
import AccountRecoveryComponent from "./components/AccountRecoveryComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        { path: '/client',                       component: LoginComponent,                 name: 'home' },
        { path: '/client/login',                 component: LoginComponent,                 name: 'login' },
        { path: '/client/registration',          component: RegistrationComponent,          name: 'registration' },
        { path: '/client/account-recovery',      component: AccountRecoveryComponent,       name: 'account-recovery' }
    ]
});

