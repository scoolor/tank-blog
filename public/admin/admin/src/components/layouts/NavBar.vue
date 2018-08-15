<template>
  <el-row class="nav-bar">
    <el-col :span="6" class="logo-box">
      <img src="../../assets/logo.png" class='logo' alt="">
      <span class='title'>Blog管理系统</span>
    </el-col>
    <div class="user-box">
      <span class='user-operation'>
        <el-dropdown trigger="click">
          <span class="el-dropdown-link">
            <div class='user-info'>
              <p class='display-text greeting'>欢迎</p>
              <p class='display-text user-name'>admin</p>
            </div>
            <i class="el-icon-caret-bottom el-icon--right"></i>
          </span>
          <el-dropdown-menu slot="dropdown">
            <el-dropdown-item>修改信息</el-dropdown-item>
            <el-dropdown-item>修改密码</el-dropdown-item>
            <el-dropdown-item>退出</el-dropdown-item>
          </el-dropdown-menu>
        </el-dropdown>
      </span>
      <i class="fa fa-sign-out log-out-icon"></i>
    </div>
    <div class="notify-box">
      <el-dropdown trigger="click">
        <span class="el-dropdown-link">
          <span class="tank-message">消息</span>
          <i class="el-icon-caret-bottom el-icon--right"></i>
        </span>
        <el-dropdown-menu slot="dropdown">
          <el-dropdown-item class="clearfix">
            评论
            <el-badge class="mark" :value="12" />
          </el-dropdown-item>
          <el-dropdown-item class="clearfix">
            回复
            <el-badge class="mark" :value="3" />
          </el-dropdown-item>
        </el-dropdown-menu>
      </el-dropdown>
    </div>
  </el-row>
</template>

<script>
export default {
  name: 'nav-bar'
}
</script>

<style scoped lang="less">
  .el-menu .el-submenu .el-menu-item {
    min-height:60px;
  }
  .logo-box {
    line-height: 60px;
    min-width: 400px;
    padding-right: 150px;
    .logo {
      height: 50px;
      width: 50px;
      margin-right: 5px;
      vertical-align: middle;
      display: inline-block;
    }
    .title {
      vertical-align: middle;
      font-size: 22px;
      font-family: cursive;
      letter-spacing: 3px;
    }
  }
  .nav-bar {
    width: 100%;
    height: 60px;
    min-width:600px;
    background: #263238;
    position: fixed;
    top: 0px;
    left: 0px;
    z-index: 100;
    color: #FFF;
    border-bottom: 1px solid #000000;
    .log-out-icon {
      vertical-align: middle;
      cursor: pointer;
      margin-right:10px;
    }
  }
  .user-box {
    height: 60px;
    line-height: 60px;
    text-align:right;
    float:right;
  }

  .notify-box {
    height: 60px;
    line-height:60px;
    float: right;
    margin-right: 20px;
    .tank-message {
      color:#f0f9eb;
    }
  }

  .user-info{
    display: inline-block;
    width:auto;
    height: 60px;
    vertical-align: middle;
    padding: 0 5px;
    .display-text{
      line-height: 20px;
      text-align: center;
      font-size: 14px;
    }
    .greeting{
      color:#f0f9eb;
      font-size: 12px;
      margin-top:8px;
      margin-bottom: 4px;
    }
    .user-name{
      color:#8BDF4F;
      font-weight:bolder;
      margin-top:4px;
      margin-bottom: 8px;
    }
  }

  .user-operation {
    cursor: pointer;
    margin-right: 5px;
    .el-dropdown {
      color: #FFF;
    }
  }

  .el-dropdown-link {
    cursor: pointer;
    color: #909399;
  }
</style>
