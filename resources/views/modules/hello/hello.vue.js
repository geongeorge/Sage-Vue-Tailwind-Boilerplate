import Vue from 'vue'

new Vue({
    el: '#module-hello',
    data: {
        name: 'Geon',
    },
    mounted() {
        console.log('Hello');
    },
})