/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);


// Zo kun je bijvoorbeeld <sidebar></sidebar> gebruiken en toont hij de template van de sidebar
Vue.component('MainApp', require('./components/Welcome.vue').default);
Vue.component('sidebar', require('./components/sidebar.vue').default);
Vue.component('comment', require('./components/periode/3/blog/Comment').default);
Vue.component('login', require('./components/Login').default);
Vue.component('datetimepicker', require('./components/periode/3/blog/datetimepicker').default);




// Dit zorgt ervoor dat je als je naar een bepaald path gaat je de volgende componenten inlaad.
const welcome = require('./components/Welcome.vue').default;
const periode = require('./components/Periode.vue').default;
const periode3 = require('./components/periode/periode3.vue').default;
const profile = require('./components/periode/3/blog/Profile.vue').default;
const post = require('./components/periode/3/blog/Post-Create.vue').default;
const blog = require('./components/periode/3/Blog.vue').default;
const profileedit = require('./components/periode/3/blog/Profile-Edit.vue').default;
const User = require('./components/periode/3/blog/User.vue').default;
const railfence = require('./components/ExampleComponent').default;

// Routes

const routes = [
    { path : '/', component : welcome },
    { path : '/periode', component : periode },
    { path : '/periode/3', component : periode3 },
    { path : '/periode/3/blog', component : blog },
    { path : '/periode/3/blog/create', component : post },
    { path : '/periode/3/blog/profile', component : profile},
    { path : '/periode/3/blog/profile-edit', component: profileedit},
    { path : '/periode/3/blog/user/:userName', component: User},
    { path : '/periode/3/rail-fence-cipher', component: railfence},
];
// Maakt een nieuwe Vue Route

const router = new VueRouter({
    routes,
});

/**
 * Next, we will create a fresh Vue application      instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Toont vervolgens de routes + componenten in de #app of de welcome pagina.

const app = new Vue({
    el: '#app',
    router
}).$mount('#app');



// Custom functions are set in the /public/js/script.js
