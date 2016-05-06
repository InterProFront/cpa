@extends('front.layout')
<?php $title = 'Техника безопасности — Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content">
        <div class="head-image">
            <img src="/images/{{$rules->head_image->primary_link}}" alt="">
        </div>

        <?php
        function Fr($str){

            $date = new DateTime($str);

            $str = (string)$date->format('d M Y');

            $str = str_replace(array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'),
                    array('Января', 'Фервраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'),
                    $str);

            return $str;
        }
        ?>
        @include('front.tb.menu')
        @yield('menu')
        <div class="company company-big">

            <div class="study-block news">
                <div class="wrap">
                    <div class="col">
                        <h1 class="big-title"> {{$rules->title_field}}</h1>
                        {!! $rules->rules_text_field !!}
                    </div>
                    <div class="col new">
                        <h4 class="title">
                            Новости и события
                        </h4>
                        <div class="news-wrap-block">
                            @foreach($news as $item)
                                <div class="news">
                                    <p class="news-title"><a href="{{$item->link_field}}">{{$item->news_title_field}}</a></p>
                                    <p class="small"><?=Fr($item->news_date_field) ?>  •  <a href="https://tengrinews.kz">tengrinews.kz</a></p></div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection