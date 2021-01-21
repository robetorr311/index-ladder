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
Vue.component('profile-component', require('./components/profile/ProfileComponent.vue').default);
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
Vue.component('categories-component', require('./components/categories/CategoriesComponent.vue').default);
Vue.component('sales-component', require('./components/products/SalesComponent.vue').default);
Vue.component('editproduct-component', require('./components/products/EditProductComponent.vue').default);
Vue.component('what-component', require('./components/dashboards/WhatComponent.vue').default);
Vue.component('faq-component', require('./components/dashboards/FaqComponent.vue').default);
Vue.component('recover-component', require('./components/registration/EmailComponent.vue').default);
Vue.component('change-component', require('./components/registration/ChangepassComponent.vue').default);
Vue.component('phone-component', require('./components/PhoneComponent.vue').default);
Vue.component('verification-component', require('./components/VerifyphoneComponent.vue').default);
Vue.component('dashboard-component', require('./components/dashboards/DashboardComponent.vue').default);
Vue.component('choosecat-component', require('./components/categories/ChooseComponent.vue').default);
Vue.component('userinfo-component', require('./components/profile/InfoComponent.vue').default);
Vue.component('slidefav-component', require('./components/products/SliderfavComponent.vue').default);
Vue.component('tradetable-component', require('./components/trades/TradetableComponent.vue').default);
Vue.component('getusers-component', require('./components/categories/GetusersComponent.vue').default);
Vue.component('favusers-component', require('./components/products/FavusersComponent.vue').default);
Vue.component('matchusersc-component', require('./components/categories/MatchuserscComponent.vue').default);
Vue.component('matchusersp-component', require('./components/products/MatchuserspComponent.vue').default);
Vue.component('mytrades-component', require('./components/trades/AllmytradesComponent.vue').default);
Vue.component('alltrades-component', require('./components/trades/AlltradesComponent.vue').default);
Vue.component('profiletrader-component', require('./components/trades/TraderprofileComponent.vue').default);
Vue.component('messages-component', require('./components/trades/MessageComponent.vue').default);
Vue.component('excimage-component', require('./components/ExcimageComponent.vue').default);
Vue.component('partner-component', require('./components/products/PartnersComponent.vue').default);
Vue.component('inprogress-component', require('./components/trades/InprogressComponent.vue').default);
Vue.component('completed-component', require('./components/trades/CompletedComponent.vue').default);
Vue.component('cancelled-component', require('./components/trades/CancelledComponent.vue').default);
Vue.component('qualify-component', require('./components/trades/QualifyComponent.vue').default);
Vue.component('publishtrade-component', require('./components/trades/PublishtradeComponent.vue').default);
Vue.component('trade-component', require('./components/trades/TradeComponent.vue').default);
Vue.component('showproposals-component', require('./components/trades/ShowproposalsComponent.vue').default);
Vue.component('getqualify-component', require('./components/trades/GetqualifyComponent.vue').default);
Vue.component('choosepro-component', require('./components/categories/ChooseproductsComponent.vue').default);
Vue.component('chooseserv-component', require('./components/categories/ChooseservicesComponent.vue').default);
Vue.component('chooseskill-component', require('./components/categories/ChooseskillsComponent.vue').default);
Vue.component('profileshare-component', require('./components/profile/ShareComponent.vue').default);

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
