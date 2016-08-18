<div class="server-status">
    <img src="{{ asset('images/download_button.png') }}">
    <span class="image-overlay server-status-overlay">
                <img src="{{ asset('images/muse.png') }}">
            </span>
    <div class="big-padding">
        <h1 class="border">server status (beta)</h1>
        {{--@if(@fsockopen("217.23.14.134", 29000) && @fsockopen("217.23.14.134", 29100) && @fsockopen("217.23.14.134", 29200))--}}
            @if(true)
            <span class="online">online</span>
        @else
            <span class="offline">offline</span>
        @endif

        <ul class="user-info">
            <li>{{\App\UserInfo::count()}} accounts</li>
            <li>{{\App\Avatar::count()}} characters</li>
        </ul>

        <ul>
            <li><span class="server-rate">exp</span>?x</li>
            <li><span class="server-rate">zul</span>?x</li>
            <li><span class="server-rate">drop</span>?x</li>
        </ul>
    </div>
</div>