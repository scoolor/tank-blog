import Vue from 'vue'
import Router from 'vue-router'
import NavBar from '@/components/NavBar'
import SideBar from '@/components/SideBar'
import FootBar from '@/components/FootBar'
import Main from '@/components/Main'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      components: {
        default: Main,
        nav: NavBar,
        side: SideBar,
        foot: FootBar
      }
    }
  ]
})
