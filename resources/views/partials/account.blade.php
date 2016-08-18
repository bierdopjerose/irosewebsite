<?php
$user = \App\UserInfo::where('Account', '=', Session::get('user')->Account)->get()->first();
?>

@extends('main')

@section('content')
    <div class="one-fourth">
        @include('partials/membersection')
        @include('partials/advertorialsection')

    </div>
    <div class="three-fourth-right">
        <div class="account big-padding">
            <form class="register" method="post" role="form" action="/update">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Contact information</h1>
                <input placeholder="email*" value="{{$user->Email}}" type="email" name="Email" id="Email" required>
                <span class="error">{{ $errors->update->first('Email') }}</span>

                <h1>Personal information</h1>
                <input placeholder="firstname*" value="{{$user->FirstName}}" type="text" name="firstname" id="firstname"
                       required>
                <input placeholder="lastname*" value="{{$user->LastName}}" type="text" name="lastname" id="lastname"
                       required>
                <input placeholder="date of birth*" value="{{$user->Birthday}}" type="date" name="birthdate"
                       id="birthdate" readonly>
                <span class="error">{{ $errors->update->first('firstname') }}</span>
                <span class="error">{{ $errors->update->first('lastname') }}</span>
                <span class="error">{{ $errors->update->first('birthdate') }}</span>
                <h1>Security information</h1>
                <input placeholder="Mothers name*" value="{{$user->answer}}" type="text" name="mothersname"
                       id="mothersname" required>
                <span class="error">{{ $errors->update->first('mothersname') }}</span>
                <p>* required field</p>
                <input class="button" value="save" type="submit">
            </form>

            <form class="register" method="post" action="/beta">
                <h1>{{session('message')}}</h1>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <h1>Beta key</h1>
                <input placeholder="beta key" value="{{$user->betakey}}" type="text" name="betakey" required>
                <span class="error">{{ $errors->betakey->first('betakey') }}</span>

                <input class="button" value="activate" type="submit">
            </form>
        </div>
    </div>

@endsection