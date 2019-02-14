import App from './web-app.vue';
import Vue from 'vue';
import Vuetify from 'vuetify'
import router from './web-router';

Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
