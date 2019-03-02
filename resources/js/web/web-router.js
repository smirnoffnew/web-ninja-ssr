import Vue from 'vue';
import Router from 'vue-router';
import HomeComponent from "./components/HomeComponent";
import BlogComponent from "./components/BlogComponent";
import AboutComponent from "./components/AboutComponent";
import ContactsComponent from "./components/ContactsComponent";

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [
        { path: '/web',                          component: HomeComponent,                     name: 'home'       },
        { path: '/web/blog',                     component: BlogComponent,                     name: 'blog'       },
        { path: '/web/about',                    component: AboutComponent,                    name: 'about'      },
        { path: '/web/contacts',                 component: ContactsComponent,                 name: 'contacts'   },
    ]
});
