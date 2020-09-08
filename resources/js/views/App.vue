<template>
  <div id="app">
    <transition name="page" mode="out-in">
      <component :is="layout">
        <router-view />
      </component>
    </transition>
  </div>
</template>
<script>
const default_layout = "default";
export default {
  computed: {
    layout() {
      return this.$route.meta.layout || default_layout;
    },
  },
};
</script>

<style>
</style>