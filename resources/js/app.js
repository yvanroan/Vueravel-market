/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
import Vue from 'vue';
import store from './store/index';
import App from './views/App.vue';
import router from '@/router';

Vue.config.productionTip = false;
// Vue.prototype.$axios = axios;

new Vue({
	el: '#start',
	router,
	store,
	render: h => h(App),
});

