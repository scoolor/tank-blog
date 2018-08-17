<template>
  <el-container style="min-height: 100vh;background-color:#807C79">
    <el-header>
      <!--<login-nav></login-nav>-->
    </el-header>
    <el-main>
      <login-main></login-main>
    </el-main>
    <el-footer>
      <login-foot></login-foot>
    </el-footer>
  </el-container>
</template>

<script>
import LoginNav from './LoginNav'
import LoginMain from './LoginMain'
import LoginFoot from './LoginFoot'

export default {
  name: 'login',
  components: {
    LoginNav, LoginMain, LoginFoot
  }
}
</script>

<style scoped>

</style>
