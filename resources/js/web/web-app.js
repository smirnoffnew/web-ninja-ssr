import Vue from 'vue';
import Vuetify from 'vuetify';
import App from './web-app-component';
import router from './web-router';

Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
