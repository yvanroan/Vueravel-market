/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */
import Vue from 'vue';
import App from './views/App.vue';

Vue.config.productionTip = false;

new Vue({
	el: '#app',
	render: h => h(App),
});

