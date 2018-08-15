<template>
  <el-scrollbar style="height:100%;overflow-x: hidden;">
  <el-row style="">
    <el-col>
      <el-menu :default-openeds="['1']" background-color="#263238" text-color="#FFF" active-text-color="#ffd04b" style="border-right-color: #263238">
        <router-link to="/home">
        <el-menu-item index="1">
          <template slot="title">
            <i class="fa fa-tachometer"></i>
              <span slot="title">
                仪表盘
              </span>
          </template>
        </el-menu-item>
        </router-link>
        <el-submenu index="2">
          <template slot="title">
            <i class="fa fa-users"></i>
            <span>
              帐号管理[后台]
            </span>
          </template>
          <el-menu-item-group>
            <template slot="title">
              <span class="menu-group">帐号</span>
            </template>
            <router-link to="/admin-user-list">
              <el-menu-item index="2-1">
              <span class="menu-item">
                用户
              </span>
              </el-menu-item>
            </router-link>
            <el-menu-item index="2-2">
              <span class="menu-item">
                角色
              </span>
            </el-menu-item>
          </el-menu-item-group>
          <el-submenu index="2-3">
            <template slot="title">
              <span class="menu-item">
                资源
              </span>
            </template>
            <el-menu-item index="2-3-1">
              <span class="menu-item">
                菜单
              </span>
            </el-menu-item>
            <el-menu-item index="2-3-2">
              <span class="menu-item">
                操作
              </span>
            </el-menu-item>
            <el-menu-item index="2-3-3">
              <span class="menu-item">
                页面元素
              </span>
            </el-menu-item>
            <el-menu-item index="2-3-4">
              <span class="menu-item">
                文件
              </span>
            </el-menu-item>
          </el-submenu>
        </el-submenu>
      </el-menu>
    </el-col>
  </el-row>
  </el-scrollbar>
</template>

<script>
export default {
  name: 'side-bar'
}
</script>

<style lang="less" scoped>
  .el-submenu .el-menu-item {
    min-width:180px;
  }
</style>
