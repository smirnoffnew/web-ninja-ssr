import App from './client-app-component';
import Vue from 'vue';
import router from './router'

export default new Vue({
    router,
    render: h => h(App)
});
