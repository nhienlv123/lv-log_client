import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

import auth from './module/auth';
const storeData = {
    module: {
        auth,
    }
}

const store = new Vuex.Store(storeData);
export default store;