@extends('front.layout')
<?php $title = 'Новости — Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content">
        <div class="head-image">
            <img src="/images/{{$news->head_image->primary_link}}" alt="">
        </div>

        @include('front.news.menu')
        @yield('menu')
        <div class="company company-big">
            <div class="service-title-block">
                <h1 class="big-title">{{$news->title_field}}</h1>
            </div>
            <div class="news-block">
                <div class="news-top">
                    <div class="col-1-2">
                        <div class="big-news-wrap">
                            <ul class="big-news">
                                @foreach($news_big as $item)
                                    <li class="news" data-id="{{$item->id_field}}">
                                        <p class="title"><a href="{{$item->link_field}}">{{$item->news_title_field}}</a></p>
                                        <p class="small">{{$item->news_date_field}}  •  <a href="#">{{$item->agregator_field}}</a></p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="news-sources">
                            <h4 class="small-title">Источник</h4>
                            <ul class="sources">
                                @foreach($agr as $item=>$value)
                                    <li class="source-item"><a href="/news/{{$item}}">{{$item}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-all">
                    <ul class="small-news">
                        @include('front.news.small_news')
                    </ul>
                </div>
                <p class="more"><a class="more-news">Загрузить еще</a></p>
            </div>
        </div>
    </section>
@endsection