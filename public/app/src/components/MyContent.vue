<template>
  <div style="width : 66%; margin : 50px auto;">
    <div style="width : 100%; height : 60px; border-bottom: 1px solid rgba(219, 221, 229, 0.6);">最近文章</div>

    <el-card class="box-card" shadow="hover">
      <div v-for="o in 4" :key="o" class="text item">
        {{'列表内容1 ' + o }}
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
  .el-card {
    cursor : pointer;
  }
</style>