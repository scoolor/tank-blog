<template>
  <el-row>
    <el-col :span="8" :offset="8" style="margin-top:15vh;">
      <el-card shadow="always">
        <div slot="header" class="login-header-box">
          <span class="header-title">Blog管理系统</span>
        </div>
        <el-form label-position='left' label-width="80px" :model="loginForm" :rules="rules" ref="loginForm">
          <el-form-item label="用户名" prop="userName" >
            <el-input v-model="loginForm.userName" placeholder="用户名/邮箱"></el-input>
          </el-form-item>
          <el-form-item label="密码" prop="userPassWord">
            <el-input type="password" v-model="loginForm.userPassWord" placeholder="请输入密码"></el-input>
          </el-form-item>
        </el-form>
        <el-row style="text-align: center;">
          <el-col :span="6" :offset="9">
            <el-button type="primary" @click="submitForm('loginForm')">
                <span>
                  &nbsp;&nbsp;&nbsp;&nbsp;登录&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </el-button>
          </el-col>
        </el-row>
        <el-row class="login-bottom-box">
          <el-col :span="6" :offset="9">
            <span>
              <router-link to="/home">
                忘记密码?
              </router-link>
            </span>
          </el-col>
        </el-row>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
export default {
  name: 'login-main',
  data () {
    return {
      loginForm: {
        userName: '',
        userPassWord: ''
      },
      rules: {
        userName: [
          {
            required: true,
            message: '请输入用户名',
            trigger: 'blur'
          },
          {
            min: 3,
            max: 50,
            message: '长度在 3 到 50 个字符',
            trigger: 'blur'
          }
        ],
        userPassWord: [
          {
            required: true,
            message: '请输入密码',
            trigger: 'blur'
          }
        ]
      }
    }
  },
  methods: {
    submitForm (formName) {
      this.$refs[formName].validate((valid) => {
        if (valid) {
          // 登录
          this.$http.post('/login', {
            userName: '',
            userPassWord: ''
          })
            .then((response) => {
              this.$notify({
                title: '成功',
                message: '登录成功!',
                type: 'success'
              })
              this.$router.push('home')
            })
            .catch((error) => {
              this.$message.error("Error")
              this.$message.error(error.message)
            })
        } else {
          this.$message.error('请检查您的输入内容!')
          return false
        }
      })
    }
  }
}
</script>

<style scoped lang="less">
  .login-header-box {
    line-height: 30px;
    text-align: center;
    .header-title {
      vertical-align: middle;
      font-size: 22px;
      font-family: cursive;
      letter-spacing: 3px;
    }
  }
  .login-bottom-box {
    margin-top: 20px;
    text-align: center;
    font-size: 12px;
  }
</style>
