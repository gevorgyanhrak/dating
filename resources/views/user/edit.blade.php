@extends('layouts.site')
@section('content')
    <div class="container"  style="margin-top:150px;">
        <h1>Welcome {{$user->name}}</h1>

        <form method="post" action="{{url('profile')}}/{{$user->id}}">
            @csrf()
            @method('put')
            <div class="form-group col-md-3">
                <label>Name</label>
                <input name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group col-md-3">
                <label>Email Address</label>
                <input name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group col-md-3">
                <label>Age</label>
                <input name="age" class="form-control" value="{{$user->age}}">
            </div>
            <div class="form-group col-md-3">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option @if($user->gender == 1) selected @endif value="1">Male</option>
                    <option @if($user->gender == 2) selected @endif value="2">Female</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
