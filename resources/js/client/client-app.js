import Vue from 'vue';
import App from './client-app-component';
import router from './client-router';

export default new Vue({
    router,
    render: h => h(App)
});
