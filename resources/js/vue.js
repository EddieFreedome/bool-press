Vue.component('example-component', require('./components/ExampleComponent.vue').default);
window.Vue = require('vue');



const app = new Vue({
    el: '#app',
});