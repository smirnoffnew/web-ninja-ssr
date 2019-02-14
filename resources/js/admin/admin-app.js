import App from './admin-app.vue';
import Vue from 'vue';
import Vuetify from 'vuetify'
import router from './admin-router';

Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
