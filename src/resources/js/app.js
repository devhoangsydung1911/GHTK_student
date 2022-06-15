/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
window.axios = require("axios");

import Vue from "vue";

Vue.component("app-component", require("./App.vue").default);

import VueRouter from "vue-router";
import Routes from "./Routes";
Vue.use(VueRouter);
const router = new VueRouter(Routes);

import Toaster from "v-toaster";
import "v-toaster/dist/v-toaster.css";

Vue.use(Toaster, { timeout: 5000 });

const app = new Vue({
  el: "#app",
  router: router,
});
