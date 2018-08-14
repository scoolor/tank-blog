<template>
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li>
          <router-link to="/home">
            <span class="am-icon-home"></span>
            仪表盘
          </router-link>
        </li>
        <li class="admin-parent">
          <a href="#" data-am-collapse="{target: '#admin-user-manage-collapse-nav'}">
            <span class="am-icon-users"></span>
            帐号管理[后台]
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
          </a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="admin-user-manage-collapse-nav">
            <li>
              <router-link class="am-cf" to="/admin-user-list">
                <span class="am-icon-check"></span>
                用户
                <span class="am-badge am-badge-secondary am-margin-right am-fr">24</span>
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                用户组
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                角色
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                权限
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                菜单[权限]
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                操作[权限]
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                页面元素[权限]
              </router-link>
            </li>
            <li>
              <router-link class="am-cf" to="/test">
                <span class="am-icon-check"></span>
                文件[权限]
              </router-link>
            </li>
          </ul>
        </li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p>
            <span class="am-icon-bookmark"></span>
            公告
          </p>
          <p>慢,是一种哲学</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p>
            <span class="am-icon-tag"></span>
            简介
          </p>
          <p>Blog的前世今生</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'side-bar'
}
</script>

<style scoped>

</style>
