<template>
  <div id="app">
    <router-view class="" name="nav"></router-view>
    <div class="am-cf admin-main">
    <router-view class="" name="side"></router-view>
      <div class="admin-content">
        <router-view class=""></router-view>
        <router-view class="" name="foot"></router-view>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style>

</style>
