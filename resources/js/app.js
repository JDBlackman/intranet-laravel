require('./bootstrap');
import Vue from 'vue';
import moment from 'moment';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import StoreData from './store';
import {router} from './routes';

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

import Main from './components/Main'
Vue.component('main-component', Main)

window.moment = moment;

const app = new Vue({
  router,
  store,
  components: { Main }
}).$mount('#app')
