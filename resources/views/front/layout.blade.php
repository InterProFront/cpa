<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{{$title or 'Центр Промышленного Альпинизма'}}}</title>
    <link rel="icon" type="image/gif" href="/images/fav.gif"/>
    @include('front.style')
    @yield('style')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="wrapper">

        @include('front.header')
        @yield('header')
    <div class="parallax-div">
        <div class="a1">
            <div class="rope"></div>
            <img src="1.PNG" alt="">
        </div>
        <div class="a2">
            <div class="rope"></div>
            <img src="2.PNG" alt="">
        </div>
        <div class="a3">
            <div class="rope"></div>
            <img src="1.PNG" alt="">
        </div>
        @yield('content')
    </div>
        @include('front.footer')
        @yield('footer')

</div>
<div class="popup-hider">
    @include('front.popups.ask')
    @include('front.popups.join')
    @include('front.popups.serv')
    @include('front.popups.thank')
    @yield('ask')
    @yield('join')
    @yield('serv')
    @yield('thank')
</div>
@include('front.scripts')
@yield('scripts')
</body>
</html>
