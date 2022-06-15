<template>
  <div class="app">
    <top-page></top-page>
    <main-page></main-page>
    <food-page></food-page>
  </div>
</template>

<script>
import TopPage from "./views/TopPage.vue";
import MainPage from "./views/MainPage.vue";
import FoodPage from "./views/FoodPage.vue";
export default {
  components: {
    "top-page": TopPage,
    "main-page": MainPage,
    "food-page": FoodPage,
  },
};
</script>

<style scoped>
.app {
  background-color: #ebebeb;
  max-width: 1400px;
  margin: 20px auto;
  border-radius: 10px;
}
</style>
