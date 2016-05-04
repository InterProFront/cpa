<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{{$title or 'Центр Промышленного Альпинизма'}}}</title>
        @include('front.style')
        @yield('style')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="wrapper">
            @include('front.header')
            @yield('header')
            @yield('content')
            @include('front.footer')
            @yield('footer')
        </div>
        <div class="popup-hider">
            @yield('ask')
        </div>
        @include('front.scripts')
        @yield('scripts')
    </body>
</html>
