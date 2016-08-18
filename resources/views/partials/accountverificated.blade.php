@extends('main')

@section('content')
    <script>
        $(document).ready(function() {
            window.setInterval(function() {
                var timeLeft    = $("#timeLeft").html();
                if(eval(timeLeft) == 0){
                    window.location= ("/");
                }else{
                    $("#timeLeft").html(eval(timeLeft)- eval(1));
                }
            }, 1000);
        });
    </script>

    <div class="account-verified big-padding">
        <div class="account-verified-inner">
            <h1>Account verified</h1>
            <h3>Have fun on your adventure!</h3>

            You will be redirected to the home page in <span id="timeLeft" >5</span> seconds.


        </div>

    </div>
@endsection