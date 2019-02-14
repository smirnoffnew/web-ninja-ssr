import App from './client-app.vue';
import Vue from 'vue';
import Vuetify from 'vuetify'
import router from './client-router';

Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
