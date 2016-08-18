@extends('main')

@section('content')
    <div class="one-fourth">
        @include('/partials/membersection')
        <br>
        @include('/partials/serverstatus')
    </div>
    <div class="three-fourth-right">
        <div class="account-created big-padding">
            <h1>Account created</h1>
            <h2>Welcome to Rose Revised!</h2>
            <p>Before you can start your journey, we have to make sure you entered a valid email address which you have access to.
                We have sent you an email with further instructions. Didn't receive the email? Please check your junk folder.
            </p>

            <p>
                If you still haven't receive the email within more then 2 hours, feel free to contact us.<br>
                <a href="#">http://roserevised.com/support</a>
            </p>
        </div>

    </div>

@endsection