<template>
  <el-row :type="flex">
    <el-col :span="8">
      <ul class="nav">
        <li class="nav-list">
          <span style="font-size:20px;">
            <a href="#">2lovecode</a>
          </span>
        </li>
      </ul>
    </el-col>
    <el-col :span="8" :push="2">
      <ul class="nav">
        <li class="nav-list">
          <a href="https://github.com/2lovecode">
            <i class="love-code-link-icon iconfont icon-github-fill"></i>
          </a>
        </li>
        <li class="nav-list">
          <a href="#">
            <i class="love-code-link-icon iconfont icon-QQ"></i>
          </a>
        </li>
      </ul>
    </el-col>
    <el-col :span="4" :push="3">
      <ul class="nav">
        <li class="nav-list">
          <a href="#">
            文章
          </a>
        </li>
        <li class="nav-list">
          <a href="#">
            简介
          </a>
        </li>
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
  .nav {
    list-style-type: none;
  }
  .nav-list {
    float : left;
    min-width: 60px;
    cursor : pointer;
  }
  .love-code-link-icon {
    font-size : 25px;
  }
</style>