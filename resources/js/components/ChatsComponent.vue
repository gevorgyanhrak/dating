<template>
    <div id="app">>
        <div class="col-sm-2 col-xs-12 chat_wrapper">
            <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
                <div class="chat-users"><h6>Online</h6>
                    <div class="user_chat_item" v-on:click="select('multiCollapseExample' + user.id, user.name, user.id, user.hash)"
                         v-for="(user, index) in users" :key="index">
                        <div class="avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                 alt="User name">
                            <div class="status off"></div>
                        </div>
                        <div class="name">{{ user.name }}</div>
                        <div class="mood">User mood</div>
                    </div>
                </div>
            </div>
        </div>

        <div ref="container" class="bottom_chat"></div>
    </div>
</template>

<script>


    import Vue from 'vue'
    import ChatsItemComponent from './ChatsItemComponent'

    export default {
        props:['user'],
        data() {
            return {
                messages: {},
                newMessage: '',
                users:[],
                activeUser: false,
                typingTimer: false,
                activeTabs: [],
            }
        },
        created() {

            Echo.join('chat')
                .here(user => {
                    this.users = user;
                })
                .joining(user => {
                    this.users.push(user);
                })
                .leaving(user => {
                    this.users = this.users.filter(u => u.id != user.id);
                });
        },
        name: 'app',
        components: {ChatsItemComponent},
        methods: {
            select: function (event, name, user_id, hash) {
                //console.log(this.activeTabs.indexOf(user_id));
                if(this.activeTabs.indexOf(user_id) != -1)
                    return;

                this.activeTabs.push(user_id);
                this.fetchMessages(event, name, user_id, hash);

                Echo.join('chat')
                    .listen('PrivateWebSocketEvent',(event) => {
                        console.log(event.message);
                    //this.messages.push(event.message);
                })
                    .listenForWhisper('typing', user => {
                        this.activeUser = user;
                        if(this.typingTimer) {
                            clearTimeout(this.typingTimer);
                        }
                        this.typingTimer = setTimeout(() => {
                            this.activeUser = false;
                        }, 3000);
                    });

            },


            fetchMessages(event, name, user_id, hash) {
                axios.get('messages/'+hash).then(response => {
                    this.messages[hash] = response.data;

                    var ComponentClass = Vue.extend(ChatsItemComponent);
                    var instance = new ComponentClass({
                        propsData: {type: event, name: name, user_id: user_id, activeTabs: this.activeTabs, messages: this.messages[hash], hash: hash, newMessage:this.newMessage}
                    });

                    instance.$mount();

                    this.$refs.container.appendChild(instance.$el)
                })
            },
            sendTypingEvent() {
                Echo.join('chat')
                    .whisper('typing', this.user);
            }
        },
    }
</script>
