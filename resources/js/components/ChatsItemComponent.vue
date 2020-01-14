<template>
    <div class="col-md-3 pull-right border_chat" :data-id=user_id>
        <a class="btn_width custom_btn" data-toggle="collapse" :href="'#' + type" role="button" aria-expanded="false"
           aria-controls="multiCollapseExample1">{{name}}</a>
        <span class="times_close_tab" v-on:click="closeTab(user_id)">&times;</span>

        <div class="collapse multi-collapse" :id="type">
            <div class="card card-body cart_padding">
                <ul class="list-unstyled" style="height:300px; overflow-y:scroll" v-chat-scroll>


                    <li class="p-2 form-group" v-for="(message, index) in messages" :key="index">
                        <strong>{{ message.name }}</strong>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                               alt="sunil"></div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>{{ message.message }}</p>
                                    <span class="time_date"> {{ message.created_at }}</span></div>
                            </div>

                        </div>
                    </li>
                </ul>
                <form>
                    <div class="message_box">

                        <input type="text" class="chat_input form-control1">
                        <button class="btn btn-primary btn_send_msg"  @click.stop.prevent="sendMessage(hash)"><i class="fa fa-paper-plane"
                                                                        aria-hidden="true"></i></button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'ChatsItemComponent',
        props: ['type', 'name', 'user_id', 'activeTabs', 'messages', 'hash', 'newMessage'],
        methods: {
            closeTab(user_id) {
                var index = this.activeTabs.indexOf(user_id);
                this.activeTabs.splice(index, 1);
                document.querySelector('.border_chat[data-id="' + user_id + '"]').remove();
            },
            sendMessage(hash) {
                let msg = document.querySelector('.chat_input');
                this.newMessage = msg.value;
                this.messages.push({
                    user: this.user,
                    message: this.newMessage
                });
                console.log(this.newMessage);
                axios.post('messages/'+hash, {message: this.newMessage});
                this.newMessage = '';
                msg.value = '';
            },
        }
    }


</script>
