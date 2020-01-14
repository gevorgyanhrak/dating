/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('chats', require('./components/ChatsComponent.vue').default);
Vue.component('chat_item', require('./components/ChatsItemComponent.vue').default);

// new Vue({
//     el: '#app',
//     data() {
//         return {
//             cards: [
//                 {'card': {'title': 'I am one card1'}, 'card-type':'card1'},
//                 {'card': {'title': 'I am one card2'}, 'card-type':'card2'}
//             ]
//         }
//     },
//     computed: {
//         computedNoCard1: function () {
//             let availableCards = new Set(['card2', 'card3'])
//             return this.cards.filter((item) => {
//                 return availableCards.has(item['card-type'])
//             })
//         }
//     },
//     methods: {
//         addCard: function () {
//             alert();
//             let supportedCards = ['card1', 'card2', 'card3']
//             let seed = Math.floor(Math.random()*supportedCards.length)
//             this.cards.push({'card': {'title': 'I am new card for ' + supportedCards[seed]}, 'card-type': supportedCards[seed]})
//         }
//     }
// })


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
