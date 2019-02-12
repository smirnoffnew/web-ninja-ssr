import App from './components/App.vue';
import Vue from 'vue';
import Vuetify from 'vuetify'
import router from './router';


Vue.use(Vuetify);

export default new Vue({
    router,
    render: h => h(App)
});
