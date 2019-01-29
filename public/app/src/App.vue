<template>
  <div id="app">
    <el-container>
      <el-header>
        <Header></Header>
      </el-header>
      <el-main>
        <MyContent></MyContent>
      </el-main>
    </el-container>
  </div>
</template>

<script>
import Header from './components/Header'
import MyContent from './components/MyContent'


export default {
  name: 'app',
  components: {
    Header,
    MyContent
  }
}
</script>

<style src="../icon-font/iconfont.css"></style>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
