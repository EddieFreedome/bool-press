Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app', require('./components/views/App.vue').default);

window.Vue = require('vue');



const app = new Vue({
    el: '#vueApp',
});