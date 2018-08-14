import Vue from 'vue'
import Router from 'vue-router'
import NavBar from '@/components/layouts/NavBar'
import SideBar from '@/components/layouts/SideBar'
import FootBar from '@/components/layouts/FootBar'
import Main from '@/components/Main'
import Test from '@/components/Test'
import Login from '@/components/Login'
import Home from '@/components/home/Home'
import AdminUserList from '@/components/admin-user/AdminUserList'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/login',
      name: 'login',
      components: {
        default: Login
      }
    },
    {
      path: '/',
      redirect: '/home',
      components: {
        default: Main,
        nav: NavBar,
        side: SideBar,
        foot: FootBar
      },
      children: [
        {
          path: 'home',
          name: 'home',
          component: Home
        },
        {
          path: 'admin-user-list',
          component: AdminUserList
        },
        {
          path: 'test',
          component: Test
        }
      ]
    }
  ]
})
