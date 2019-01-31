<template>
  <el-row>
    <el-col :span="4">
      <el-row>
        <el-col :span="12">
          <span class="love-code-logo">
            <a href="#">2lovecode</a>
          </span>
        </el-col>
      </el-row>
    </el-col>

    <el-col :span="2" :offset="7">
      <el-row>
        <el-col :span="8">
          <span class="love-code-link-icon">
            <a href="https://github.com/2lovecode">
              <i class="iconfont icon-github-fill"></i>
            </a>
          </span>
        </el-col>
        <el-col :span="8">
          <span class="love-code-link-icon">
            <a href="#">
              <i class="iconfont icon-QQ"></i>
            </a>
          </span>
        </el-col>
        <el-col :span="8">
          <span class="love-code-link-icon">
            <a href="#">
              <i class="iconfont icon-QQ"></i>
            </a>
          </span>
        </el-col>
      </el-row>
    </el-col>

    <el-col :span="3" :offset="8">
      <el-row>
        <el-col :span="12">
          <a href="#">
            文章
          </a>
        </el-col>
        <el-col :span="12">
          <a href="#">
            简介
          </a>
        </el-col>
      </el-row>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: 'Header'
}
</script>

<style scoped>
  .el-row {
    height : 100%;
  }
  .el-col {
    height : 100%;
    line-height: 60px;
  }
  .love-code-logo {
    font-size: 25px;
    font-weight: bolder;
  }
  .love-code-link-icon a i {
    font-size : 24px;
    color : rgba(44, 62, 80, 0.5);
  }
  .love-code-link-icon a:hover i {
    color: rgba(67, 205, 128, 1);
  }
</style>