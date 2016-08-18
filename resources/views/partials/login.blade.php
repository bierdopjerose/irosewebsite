@extends('main')

@section('content')
    <div class="one-fourth">
        @include('partials/membersection')
        <br>
        @include('partials/serverstatus')
    </div>

    <div class="three-fourth-right">
        <div class="login big-padding">
            <h1>
                <span class="text">You shall not pass</span><span class="span">
        <img class="goldT" src="{{asset('/images/penguins.png')}}">
    </span>
            </h1>


            <form method="post" action="/authenticate">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input placeholder="username" type="text" name="username" required>
                {{$errors->login->first('username')}}
                <input placeholder="password" type="password" name="password" required>
                {{$errors->login->first('password')}}

                <div class="member-panel-options">
                    <ul>
                        <li><a id="forgotpass" href="#ex1" rel="modal:open"><span> > </span>Lost password</a></li>
                        <li><a href="/register"><span> > </span>Create account</a></li>
                    </ul>
                </div>

                <input class="button-login" type="submit" value="sign in">
            </form>
        </div>
    </div>
@endsection