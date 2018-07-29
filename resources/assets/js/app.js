
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


mix.sass()
    .scripts()
    .webpack('app.js')
    .copy('resources/assets/css/font/summernote.eot', 'public/font/summernote.eot')
    .copy('resources/assets/css/font/summernote.ttf', 'public/font/summernote.ttf')
    .copy('resources/assets/css/font/summernote.woff', 'public/font/summernote.woff');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
