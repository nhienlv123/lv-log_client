/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue').default;

import App from './App';
import Vue from 'vue';
import router from './router';

import VueAxios from 'vue-axios';
import axios from 'axios';
import store from './store/store';
Vue.use(VueAxios, axios);

// const app = new Vue ( 
//     Vue.util.extend(
//         {router}, 
//         App,
//         store,
//     )
// ).$mount('#app');

const app = new Vue({
    el: '#app',
    store,
    router,
    render: (h) =>h(App),
});