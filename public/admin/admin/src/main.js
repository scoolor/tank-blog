// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import store from './store'
import ElementUI from 'element-ui'
import http from './plugins/http'
import 'element-ui/lib/theme-chalk/index.css'
import 'font-awesome/css/font-awesome.css'

import { Layout } from '@/components/layouts/'
import { Home } from '@/components/home/'
import { AdminUserList } from '@/components/admin-user/'

Vue.config.productionTip = false
Vue.use(ElementUI)
Vue.use(http)

const routes = [
  {
    path: 'home',
    name: 'home',
    component: Home
  },
  {
    path: 'admin-user-list',
    name: 'admin-user-list',
    component: AdminUserList
  }
]

const asyncRouterMap = [
  {
    path: '/',
    redirect: '/home',
    name: 'index',
    component: Layout,
    children: routes
  }
]

router.addRoutes(asyncRouterMap)

router.beforeEach((to, from, next) => {
  // 每次路由变化都需要token认证,并刷新token.
  // menu列表和路由列表需要比较是否发生改变,如果改变则重新刷新本地存储.
  next()
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
