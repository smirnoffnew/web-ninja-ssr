import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router);

function PageComponent(name) {
 return {
   render: h => h('h3', `Hello from the ${name} page`)
 };
}

export default new Router({
  mode: 'history',
  routes: [
    { path: '/client', component: PageComponent('Home'), name: 'home' },
    { path: '/client/about', component: PageComponent('About'), name: 'about' },
    { path: '/client/contact', component: PageComponent('Contact'), name: 'contact' }
  ]
});
