<template>
  <div style="width : 66%; margin : 50px auto;">
    <div class="love-code-article-header">最近文章</div>
    <el-card class="box-card" shadow="hover">
      <div>
        第一篇
      </div>
    </el-card>
    <el-card class="box-card" shadow="hover">
      <div>
        第二篇
      </div>
    </el-card>
    <el-card class="box-card" shadow="hover">
      <div>
        第三篇
      </div>
    </el-card>
  </div>
</template>

<script>
export default {
  name: 'MyContent'
}
</script>

<style scoped>
  .love-code-article-header {
    width : 100%;
    height : 60px;
    border-bottom: 1px solid rgba(219, 221, 229, 0.6);
  }
  .el-card {
    margin-top : 3%;
    cursor : pointer;
  }
</style>