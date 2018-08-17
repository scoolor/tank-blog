import Vue from 'vue'
import Router from 'vue-router'
import { Login } from '@/components/login/'

Vue.use(Router)

const routes = [{
  path: '/login',
  name: 'login',
  component: Login
}]

export default new Router({
  strict: process.env.NODE_ENV !== 'production',
  routes: routes
})
