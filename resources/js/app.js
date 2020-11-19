/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.events = new Vue();

const VueUploadComponent = require('vue-upload-component');
Vue.component('file-upload', VueUploadComponent);
//import * as VeeValidate from 'vee-validate';
//Vue.use(VeeValidate);
// Register it globally
// main.js or any entry file.
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('footer-component', require('./components/dashboards/FooterComponent.vue').default);
Vue.component('header-component', require('./components/dashboards/HeaderComponent.vue').default);
Vue.component('message-component', require('./components/dashboards/MessageComponent.vue').default);
Vue.component('slide-component', require('./components/SlideComponent.vue').default);
Vue.component('products-component', require('./components/ProductsComponent.vue').default);
Vue.component('skills-component', require('./components/SkilssComponent.vue').default);
Vue.component('services-component', require('./components/ServicesComponent.vue').default);
Vue.component('how-component', require('./components/dashboards/HowComponent.vue').default);
Vue.component('privacy-component', require('./components/dashboards/PrivacyComponent.vue').default);
Vue.component('registration-component', require('./components/registration/RegistrationComponent.vue').default);
Vue.component('login-component', require('./components/registration/LoginComponent.vue').default);
Vue.component('profile-component', require('./components/registration/ProfileComponent.vue').default);
Vue.component('smscode-component', require('./components/registration/SmsCodeComponent.vue').default);
Vue.component('twostep-component', require('./components/registration/TwoStepComponent.vue').default);
Vue.component('picture-component', require('./components/PictureComponent.vue').default);
Vue.component('card-component', require('./components/CardComponent.vue').default);
Vue.component('license-component', require('./components/LicenseComponent.vue').default);
Vue.component('avatar-component', require('./components/AvatarComponent.vue').default);
Vue.component('avatar-component', require('./components/AvatarComponent.vue').default);
Vue.component('upload-component', require('./components/UploadComponent.vue').default);
Vue.component('product-component', require('./components/products/ProductComponent.vue').default);
Vue.component('addnewproduct-component', require('./components/products/AddNewProductComponent.vue').default);
Vue.component('gallery-component', require('./components/products/GalleryComponent.vue').default);
Vue.component('favorites-component', require('./components/products/FavoritesComponent.vue').default);
Vue.component('categories-component', require('./components/products/CategoriesComponent.vue').default);
Vue.component('sales-component', require('./components/products/SalesComponent.vue').default);
Vue.component('editproduct-component', require('./components/products/EditProductComponent.vue').default);
Vue.component('what-component', require('./components/dashboards/WhatComponent.vue').default);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
