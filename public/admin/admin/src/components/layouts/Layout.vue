<template>
  <el-container style="min-height:99vh">
    <el-header>
      <nav-bar></nav-bar>
    </el-header>
    <el-container>
      <el-aside width="15vw">
        <side-bar></side-bar>
      </el-aside>
      <el-container>
        <bread-crumbs></bread-crumbs>
        <el-main>
          <router-view></router-view>
        </el-main>
        <el-footer>
          <foot-bar></foot-bar>
        </el-footer>
      </el-container>
    </el-container>
  </el-container>
</template>

<script>
import NavBar from './NavBar'
import SideBar from './SideBar'
import FootBar from './FootBar'
import BreadCrumbs from './BreadCrumbs'

export default {
  name: 'lay-out',
  components: {
    NavBar, SideBar, FootBar, BreadCrumbs
  }
}
</script>

<style scoped lang="less">
  .el-header {
    background-color: #263238;
    color: #333;
    text-align: center;
    line-height: 60px;
    border-bottom: 1px solid #CCCCCC;
  }
  .el-aside {
    background-color: #263238;
    width: auto;
    color: #333;
  }
  .el-main {
    background-color: #FFFFFF;
    color: #333;
    text-align: center;
    line-height: 160px;
  }
  .el-footer {
    background-color: #EFEFEF;
    color: #333;
    text-align: center;
    line-height: 60px;
  }
</style>
