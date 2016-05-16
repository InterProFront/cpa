@extends('front.layout')
<?php $title = 'Техника безопасности — Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content cont">
        <div class="head-image">
            <img src="/images/{{$contact->head_image->primary_link}}" alt="">
        </div>
        @include('front.contacts.menu')
        @yield('menu')
        <div class="company company-big">
            <div class="study-block news">
                <div class="wrap">
                    <div class="col-1-1">
                        <h1 class="big-title"> {{$contact->title_field}}</h1>
                        <div class="contact-block">
                            <div class="col-1-2">
                                <p><strong>Адрес</strong></p>
                                <p>Республика Казахстан, 050000, Алматы <br>
                                    ул. Макатаева 127, офис 301
                                </p>
                            </div>
                            <div class="col-1-2">
                                <p><strong>Телефоны</strong></p>
                                <p>{{$all_site->phone_field}}</p>
                                <p>{{$all_site->mob_phone_field}}</p>
                                <p><strong>Эл. Почта</strong></p>
                                <p><a href="mailto:info@cpa.kz">info@cpa.kz</a></p>
                            </div>
                        </div>
                        <div class="map-wrap">
                            <div class="map-block">
                                <a class="dg-widget-link"
                                   href="http://2gis.kz/almaty/firm/9429940000784942/center/76.92466020584108,43.262940616017566/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                                    на карте Алматы</a>
                                <div class="dg-widget-link"><a
                                            href="http://2gis.kz/almaty/center/76.92467,43.262938/zoom/16/routeTab/rsType/bus/to/76.92467,43.262938╎4 Colours, типография?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                                        проезд до 4 Colours, типография</a></div>
                                <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                                <script charset="utf-8">new DGWidgetLoader({
                                        "width": "100%",
                                        "height": "400px",
                                        "borderColor": "none",
                                        "pos": {"lat": 43.262940616017566, "lon": 76.92466020584108, "zoom": 16},
                                        "opt": {"city": "almaty"},
                                        "org": [{"id": "9429940000784942"}]
                                    });</script>
                                <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует
                                    JavaScript. Включите его в настройках вашего браузера.
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection