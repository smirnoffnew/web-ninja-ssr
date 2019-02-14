import Vue from 'vue';
import Router from 'vue-router';
import HomeWebComponent from "./pages/home/HomeWebComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/web',
    routes: [
        { path: '/', component: HomeWebComponent, name: 'home' },
    ]
});
