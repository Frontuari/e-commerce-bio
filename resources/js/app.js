/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.EventBus = new Vue();


/**
 * Detectar URL automaticamente del servidor
 */

const host = window.location.host;
const path = window.location.pathname.split("/")[1];
const protocolo = window.location.protocol;
window.URLSERVER = protocolo+"//"+host+"/"+path+"/";
window.URLHOME = protocolo+"//"+host+"/";

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nuestros-productos', require('./components/ProductFilterComponent.vue').default);
Vue.component('slider', require('./components/Slider.vue').default);
Vue.component('footer-ad', require('./components/Footer.vue').default);
Vue.component('ads', require('./components/Ads.vue').default);
Vue.component('offers', require('./components/Offers.vue').default);
Vue.component('combos', require('./components/Combos.vue').default);
Vue.component('header-menu', require('./components/Header.vue').default);
Vue.component('catalog', require('./components/Catalog.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});