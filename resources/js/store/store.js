import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import auth from './module/auth';
import client from './module/client'
const storeData = {
    modules: {
        auth,
        client,
    }
}

const store = new Vuex.Store(storeData);
export default store;