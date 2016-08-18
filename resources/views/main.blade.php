<!DOCTYPE html>
<html>
<head>
    <title>Rose Revised - Online MMORPG</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="icon" type="img/ico" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('/css/jquery.modal.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('/js/jquery.modal.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('/js/jquery.slides.min.js')}}"></script>

</head>
<body>
<div class="wrapper">
    <div class="logo">
        <img width="100%" src="{{asset('images/logo_website.png')}}">
    </div>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="navbar-text">
                <a href="/">
                    <li>home</li>
                </a>
                <a href="#">
                    <li>downloads</li>
                </a>
                <a href="http://forum.revisedonline.com">
                    <li>forum</li>
                </a>
                <a href="/account">
                    <li>my account</li>
                </a>
                <a href="/support">
                    <li>support</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>

</div>

<div class="footer">
    <div class="inner-footer">
        <div class="nav-footer border">
            <ul class="navbar-text">
                <li><a href="/">home </a></li>
                <li><a href="#">downloads </a></li>
                <li><a href="http://forum.revisedonline.com">forum </a></li>
                <li><a href="/account">my account </a></li>
                <li><a href="#">support </a></li>
            </ul>
        </div>
        <div class="nav-copyright">
            <li><img width="80px" src="{{asset('/images/logo_black.png')}}"></li>
            &copy; 2016 - Rose Revised
        </div>
    </div>
</div>
</body>
</html>
