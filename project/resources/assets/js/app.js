/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.filters = require('vue2-filters');


/**
 * Used for Communication between any other component, bind Event Globaly and listen with $on
 */
Window.Event = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('task-list', require('./components/tasklist_object/Tasklist.vue'));
Vue.component("form-data", require('./components/form-data/Formdata.vue'));
Vue.component("tabs", require('./components/tabs/Tabs.vue'));
Vue.component("tab", require('./components/tabs/Tab.vue'));
Vue.component("form-validate", require("./components/form-data/form-validate/FormValidate.vue"));
Vue.component("nesting", require("./components/nesting/Nesting.vue"));
Vue.component("users", require("./components/get-post/Users.vue"));
Vue.component("post-user", require("./components/get-post/PostUser.vue"));
Vue.component("parent", require("./components/communication/Parent.vue"));
Vue.component("item", require("./components/list-item/Item.vue"));
Vue.component("patch", require("./components/put-patch/Patch.vue"));
Vue.component("put", require("./components/put-patch/PutExample.vue"));
Vue.component("my-transition", require("./components/transitions/Transitions.vue"));

Vue.use(filters);


const app = new Vue({
    el: '#app',
});

