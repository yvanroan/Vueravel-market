import Vue from 'vue';
import Vuex from 'vuex';
import covid from './covid';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
   covid
  }
});
