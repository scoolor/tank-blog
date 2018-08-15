<template>
  <div class='tank-bread-crumbs-box'>
    <span class="narrow-bars">
      <i class="el-icon-menu"></i>
    </span>
    <el-breadcrumb class="tank-bread-crumbs" separator="/">
      <el-breadcrumb-item :to="{ path: '/home' }">首页</el-breadcrumb-item>
      <el-breadcrumb-item :to="{ path: '/admin-user-list'}">后台用户</el-breadcrumb-item>
      <el-breadcrumb-item>列表</el-breadcrumb-item>
    </el-breadcrumb>
  </div>
</template>

<script>
export default {
  name: 'bread-crumbs'
}
</script>

<style lang="less">
  .tank-bread-crumbs-box{
    background-color: #EFF2F7;
    margin-bottom: 5px;
    width: 100%;
    .narrow-bars{
      float: left;
      margin: 4px 10px;
      cursor: pointer;
      .is-active{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        transition: .38s;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
      }
    }
    .tank-bread-crumbs{
      height: 30px;
      line-height: 30px;
      .tank-bread-crumb-button{
        float:left;
        margin:4px 5px 0 0;

      }
    }
  }
</style>
