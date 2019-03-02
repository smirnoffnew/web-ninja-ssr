import Vue from 'vue';
import Router from 'vue-router';
import LoginComponent from "./components/LoginComponent";
import TokenComponent from "./components/TokenComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        { path: '/test',                       component: LoginComponent,                 name: 'home'     },
        { path: '/test/login',                 component: LoginComponent,                 name: 'login'    },
        { path: '/test/token',                 component: TokenComponent,                 name: 'token'    }
    ]
});

