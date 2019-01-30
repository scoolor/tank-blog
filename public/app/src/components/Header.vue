<template>
  <el-row>
    <el-col :span="4">
      <ul class="nav">
        <li class="nav-list">hello</li>
      </ul>
    </el-col>
    <el-col :span="4">
      <ul class="nav">
        <li class="nav-list">world</li>
        <li class="nav-list">good</li>
      </ul>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: 'Header'
}
</script>

<style scoped>
  div {
    width: 200px;
    margin : auto 0;
  }
  .nav {
    list-style-type: none;
  }
  .nav-list {
    float : left;
  }
</style>