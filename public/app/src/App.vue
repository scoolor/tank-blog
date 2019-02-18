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
  body {
    font-size : 62.5%;
  }
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: rgba(44, 62, 80, 1);
  font-size : 1.8em;
}
.el-header {
  border-bottom : 1px solid rgba(219, 221, 229, 1);
}
  a {
    text-decoration:none;
    color: rgba(44, 62, 80, 1);
  }
a:hover,a:active {
  color: rgba(67, 205, 128, 1);
}
</style>
