import App from './test-app.vue';
import Vue from 'vue';
import Vuetify from 'vuetify'
import router from './test-router';

Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
