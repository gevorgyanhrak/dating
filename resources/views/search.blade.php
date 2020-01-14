@extends('layouts.site')

@section('content')

    <div class="container" style="margin-top:150px;">
        <div class="row">
            @if(count($users) == 0)
                <h1>Nothing</h1>
            @else
                @foreach($users as $user)
                    <div class="col-md-4">
                        <div class="card-container">
                            <span class="pro">PRO</span>
                            <div class="img_wrap">
                            <img src="site/img/1.png" class="img-responsive" alt="user"/>
                            </div>
                            <h3>{{$user->name}}</h3>
                            <h6>Nodia, U.P.</h6>
                            <p>Age - {{$user->age}}</p>
                            <div class="buttons">
                                <button class="primary">
                                    Message
                                </button>
                                <button class="primary ghost">
                                    Following
                                </button>
                            </div>
                            <div class="skills">
                                <h6>Info</h6>
                                <ul>
                                    <li>Age - {{$user->age}}</li>
                                    <li>Gender - @if($user->gender == 1) Male @else Female @endif</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
