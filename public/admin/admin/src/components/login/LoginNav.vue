<template>
  <el-row class="login-nav">
    <el-col :span="6" :offset="9" class="logo-box">
      <span class='title'>Blog管理系统</span>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: 'login-nav'
}
</script>

<style scoped lang="less">
  .login-nav {
    width: 100%;
    height: 60px;
    background: #807C79;
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 100;
    color: #FFF;
  }
  .logo-box {
    line-height: 60px;
    text-align: center;
    .title {
      vertical-align: middle;
      font-size: 22px;
      font-family: cursive;
      letter-spacing: 3px;
    }
  }
</style>
