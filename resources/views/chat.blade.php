{{--<form name="frmChat" id="frmChat">--}}
{{--    <div id="chat-box"></div>--}}
{{--    <input type="text" name="chat-message" id="chat-message" placeholder="Message"  class="chat-input chat-message" required />--}}
{{--    <input type="submit" id="btnSend" name="send-chat-message" value="Send" >--}}
{{--</form>--}}
<span id="auth_id">{{auth::id()}}</span>
<div id="app">
        <div class="col-sm-2 col-xs-12 chat_wrapper">
                <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
                        <div class="chat-users"><h6>Online</h6>
                            @foreach($users as $user)
                                @if(Auth::id() != $user->id)
                                <div class="user_chat_item" data-name="{{$user->name}}" data-id="{{$user->id}}">
                                        <div class="avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                 alt="User name">
                                                <div class="status {{ $user->isOnline() ? 'online_us' : 'off' }}"></div>
                                        </div>
                                        <div class="name">{{$user->name}}</div>
                                        <div class="mood">User mood</div>
                                </div>
                                @endif
                                @endforeach
                        </div>
                </div>
        </div>

        <div ref="container" class="bottom_chat">

                @include('chat-item')

        </div>
</div>
