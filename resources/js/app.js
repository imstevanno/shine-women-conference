/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import Vue from 'vue';
// import vuetify from './plugins/vuetify';
import Vuetify from 'vuetify';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import store from './store';
 

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// import ExampleComponent from './components/ExampleComponent.vue';
import RegistrationFormComponent from './components/RegistrationFormComponent.vue';

// Vue.component('example-component', ExampleComponent);
Vue.component('registration-form', RegistrationFormComponent);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.use(Vuetify)
Vue.use(VueSweetalert2);

const app = new Vue({
    vuetify: new Vuetify(),
    store,
    el: '#swc-wrapper'
});
