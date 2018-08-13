<template>
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li>
          <a href="<?php echo Url::generateUrl(['admin', 'welcome', 'index']);?>">
            <span class="am-icon-home"></span>
            首页
          </a>
        </li>
        <li class="admin-parent">
          <a href="#" data-am-collapse="{target: '#admin-manage-collapse-nav'}">
            <span class="am-icon-users"></span>
            测试
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
          </a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="admin-manage-collapse-nav">
            <li>
              <a href="<?php echo Url::generateUrl(['admin', 'test', 'index']);?>" class="am-cf">
                <span class="am-icon-check"></span>
                测试用户
                <span class="am-badge am-badge-secondary am-margin-right am-fr">24</span>
              </a>
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
  name: 'SideBar'
}
</script>

<style scoped>

</style>
