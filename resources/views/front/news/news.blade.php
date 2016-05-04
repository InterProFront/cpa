@extends('front.layout')
<?php $title = 'Новости  ЦПА'?>
@section('content')
    <section class="content">
        <div class="head-image">
            <img src="{{$news->head_image->primary_link}}" alt="">
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
                                <li class="news">
                                    <p class="title"><a href="#">В Москве разбился промышленный альпинист.</a></p>
                                    <p class="small">20 марта 2015 • <a href="#">tengrinews.kz</a></p>
                                </li>
                                <li class="news">
                                    <p class="title"><a href="#">Крупная авария на нефтенной платформе унесла жизни 5
                                            рабочих.</a></p>
                                    <p class="small">20 марта 2015 • <a href="#">tengrinews.kz</a></p>
                                </li>
                                <li class="news">
                                    <p class="title"><a href="#">Еще одна новость с больщим заголовком про промышленных
                                            альпинистов</a></p>
                                    <p class="small">20 марта 2015 • <a href="#">tengrinews.kz</a></p>
                                </li>
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