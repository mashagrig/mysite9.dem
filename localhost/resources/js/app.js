
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./vendor/jquery-1.12.0.min.js');
require('./vendor/modernizr-2.8.3.min.js');
require('./fancybox/jquery.fancybox.pack.js');

require('./lib/rs-plugin/rs.home.js');
// require('./lib/rs-plugin/js/jquery.themepunch.enablelog.js');
// require('./lib/rs-plugin/js/jquery.themepunch.revolution.js');
// require('./lib/rs-plugin/js/jquery.themepunch.tools.min.js');


require('./jquery.collapse.js');
require('./main');
require('./jquery.countdown.min.js');
require('./jquery.counterup.min.js');
require('./jquery.meanmenu.js');
require('./jquery.mixitup.min.js');
require('./jquery.scrollUp.min.js');
require('./owl.carousel.min.js');
require('./plugins.js');
require('./price-slider.js');
require('./waypoints.min.js');
require('./wow.js');
require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
