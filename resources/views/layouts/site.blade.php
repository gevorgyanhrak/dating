
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="site/js/jquery_002.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="NFlGbzFUZTBCNC8XQCYof1A.FidCJTN1VxshNVgiCXIMEi1aSwsCcg==">
    <title>Happy</title>
    <link href="{{ asset('site/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/owl_002.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('styles')
</head>
<body>
<section class="main-section">
    <header class="header">
        <div class="navbar navbar-inverse nav-blue navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{ asset('site/img/logo.png') }}" class="img-responsive"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <nav id="w0" class="navbar-fixed-top navbar" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#w0-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <img src="{{ asset('site/img/logo.png') }}" alt="Happy Date">
                                </a>
                            </div>
                            <div id="w0-collapse" class="collapse navbar-collapse">
                                <ul id="w1" class="nav navbar-nav navbar-right blue-bg">
                                    <li class="active"><a href="http://guptaclinic.in/dating/frontend/site/index">Acceuil</a>
                                    </li>
                                    <li><a href="http://guptaclinic.in/dating/frontend/site/profile">Profile</a></li>
                                    <li><a href="http://guptaclinic.in/dating/frontend/site/stories">Stories</a></li>
                                    <li><a href="http://guptaclinic.in/dating/frontend/site/blog">Blog</a></li>
                                    <li><a href="http://guptaclinic.in/dating/frontend/site/about">About</a></li>
                                    <li><a href="http://guptaclinic.in/dating/frontend/site/contact">Contact</a></li>
                                    @guest
                                        <li><a href="{{url('register')}}">Signup</a></li>
                                        <li><a href="{{url('login')}}">Login</a></li>
                                    @else
                                        <li><a href="{{url('profile')}}/{{Auth::id()}}/edit">Profile</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!--<ul class="nav navbar-nav navbar-right blue-bg">
                    <li class="active"><a href="index.html">Home</a> </li>
                    <li><a href="profiles.html">Profile</a> </li>
                    <li><a href="stories.html">Stories</a> </li>
                    <li><a href="blog.html">Blog</a> </li>
                    <li><a href="about-us.html">About</a> </li>
                    <li><a href="contact-us.html">Contact</a> </li>
                    <li class="login" data-toggle="modal" data-target="#myModal"><a href="#">Login</a> </li>
                  </ul>-->
                </div>
            </div>
        </div>
    </header>
</section>


@yield('content')

<footer class="footer">
    <div class="container">
        <div class="footer-link">
            <ul>
                <li><a href="http://guptaclinic.in/dating/frontend/site/index.html">Home</a></li>
                <li><a href="http://guptaclinic.in/dating/frontend/site/profiles.html">Profile</a></li>
                <li><a href="http://guptaclinic.in/dating/frontend/site/stories.html">Stories</a></li>
                <li><a href="http://guptaclinic.in/dating/frontend/site/blog.html">Blog</a></li>
                <li><a href="http://guptaclinic.in/dating/frontend/site/about-us.html">About</a></li>
                <li><a href="http://guptaclinic.in/dating/frontend/site/contact-us.html">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-offset-2 col-md-5 col-xs-12">
            <div class="copyright">© Copyright 2019. All rights reserved. Follow us</div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="socail">
                <ul>
                    <li><a href="#" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tweet"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="pin"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@if(Auth::check()))
<section id="app">
   @include('chat')
</section>
@endif

<script src="{{ asset('site/js/jquery.js') }}"></script>
<script src="{{ asset('site/js/yii.js') }}"></script>
<script src="{{ asset('site/js/owl.js') }}"></script>
<script src="{{ asset('site/js/index.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.js') }}"></script>

@if(Auth::check()))
<script>

	function showMessage(messageHTML) {
        $('#chat-box').append(messageHTML);
    }

    var websocket = new WebSocket("ws://websocket.itresources.am:8091");
    websocket.onopen = function(event) {console.log("ok")
        showMessage("<div class='chat-connection-ack'>Connection is established!</div>");
    };


    websocket.onmessage = function(event) {
        var Data = JSON.parse(event.data);
		console.log(event);
        var that = $('.chat_example[data-channel="'+Data.channel_id+'"]').find('.list-unstyled');

        that.append('<li class="p-2 form-group">\n' +
            '                    <strong>'+Data.from_user_name+'</strong>\n' +
            '                    <div class="incoming_msg">\n' +
            '                        <div class="incoming_msg_img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"></div>\n' +
            '                        <div class="received_msg">\n' +
            '                            <div class="received_withd_msg">\n' +
            '                                <p>'+Data.message+'</p>\n' +
            '                                <span class="time_date">'+Data.created_at+'</span></div>\n' +
            '                        </div>\n' +
            '\n' +
            '                    </div>\n' +
            '                </li>');

        that.scrollTop(that[0].scrollHeight);

//         showMessage("<div class='"+Data.message_type+"'>"+Data.message+"</div>");
  //       $('#chat-message').val('');
    };

    websocket.onerror = function(event){
        console.log("<div class='error'>Problem due to some Error</div>");
    };
    websocket.onclose = function(event){
        console.log(event);
    };

    $(document).on("submit", '.frmChat', function(event){
        event.preventDefault();
        var that = $(this)
        var data_id = that.closest('.chat_example').data('id');
        var messageJSON = {
            from_user_id: $('#auth_id').text(),
            to_user_id: data_id,
            command: "message",
            message: that.find('.chat_input').val(),
        };

        websocket.send(JSON.stringify(messageJSON));

        that.find('.chat_input').val('');
    });

    $(document).on('click', '.user_chat_item', function(){
        var that = $(this);
        if(!that.hasClass('activeTab')){
            var chat_example = $('.chat_example:first').clone();

            that.addClass('activeTab');
            chat_example.find('.custom_btn').text(that.data('name'))
            chat_example.attr('data-id', that.data('id'));
            var auth_id = $('#auth_id').text();
            if(auth_id < that.data('id')){
                var channel = auth_id+'-'+that.data('id')
            }else{
                var channel = that.data('id')+'-'+auth_id
            }
            chat_example.attr('data-channel', channel)
            chat_example.show();
            chat_example.find('.custom_btn').attr('href', '#'+that.data('id'))
            chat_example.find('.multi-collapse').attr('id', that.data('id'))
            $('.bottom_chat').append(chat_example);

            $.ajax({
                url: '/get-user-conversation/'+that.data('id'),
                method: 'get',
                dataType: 'json',
                success: function(data){

                    $.each( data.data, function( key, value ) {
                        chat_example.find('.list-unstyled').append('<li class="p-2 form-group">\n' +
                            '                    <strong>'+value.name+'</strong>\n' +
                            '                    <div class="incoming_msg">\n' +
                            '                        <div class="incoming_msg_img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="sunil"></div>\n' +
                            '                        <div class="received_msg">\n' +
                            '                            <div class="received_withd_msg">\n' +
                            '                                <p>'+value.message+'</p>\n' +
                            '                                <span class="time_date">'+value.created_at+'</span></div>\n' +
                            '                        </div>\n' +
                            '\n' +
                            '                    </div>\n' +
                            '                </li>')
                    });

                }
            })
        }

    })
console.log(websocket.onopen)
</script>
@endif
</body>
</html>
