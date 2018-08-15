import Vue from 'vue'
import Router from 'vue-router'
import { Layout } from '@/components/layouts/'
import { Home } from '@/components/home/'
import { AdminUserList } from '@/components/admin-user/'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      redirect: '/home',
      component: Layout,
      children: [
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
    }
  ]
})
