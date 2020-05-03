import Vue from 'vue';
import VueRouter from 'vue-router';
import Body from '@/views/body/body.vue';
import Login from '@/views/login/login.vue';
import NotFound from '@/views/notfound/notfound.vue';
import Body2 from '@/views/body2/body.vue';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'hash',
  routes: [
    {
      path: '/body',
      component: Body
    },
    {
      path:'/product',
      component: Body2
    },
    {
      path: '/login',
      component: Login
    },
    {
      path: '/',
      redirect: '/login'
    },
    {
      path: '/*',
      component:NotFound
    }

  ]
});

export default router;
