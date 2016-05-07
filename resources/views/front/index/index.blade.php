@extends('front.layout')
<?php $title = 'Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content">
        <div class="slider-wrapper">
            <ul class="slider-content">
                @foreach($slider->slider_group as $item)
                    <li class="slide">
                        <img src="/images/{{$item->slider_image->primary_link}}" alt="{{$item->slider_image->alt}}"
                             class="slide-image">
                        <div class="text-wrap">
                            <p class="slide-name">{{$item->slide_name_field}}</p>
                            <p class="slide-text">{!! $item->slide_text_field !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{--menu--}}
        @include('front.index.menu')
        @yield('menu')
        {{--menuu--}}
        <div class="company index">
            <div class="col-1-1">
                <h1 class="block-title">{{$company->title_field}}</h1>
                {!! $company->about_company_field !!}
            </div>
            <div class="col-1-1">

                <div class="people">
                    <div class="wrap">
                        <img src="/images/{{$company->people_photo_image->primary_link}}"
                             alt="{{$company->people_photo_image->alt}}" class="photo">
                        <p class="name">{{$company->people_name_field}}</p>
                    </div>
                    <p class="say">{{$company->say_text_field}}</p>
                </div>
                <div class="sponsor">
                    <img src="/images/{{$company->iqsa_logo_image->primary_link}}" alt="">
                    <p>{{$company->iqsa_field}}</p>
                </div>
            </div>
        </div>
        <div class="big-block">
            <div class="image-wrap">
                <img src="/images/bg-1.png" alt="">
            </div>
            <div class="link-block">
                <p class="link-p">
                    <a href="#" class="link">Подготовка промышленных <br>
                        альпинистов 1, 2 и 3 разряда</a>
                </p>
                <p class="link-p">
                    <a href="#">Подготовка промышленных<br>
                        альпинистов по IRATA</a>
                </p>
            </div>
            <div class="six-hang">
                <p class="text">С 2010 года мы подготовили <br>
                    более 600 промышленных альпинистов <br>
                    и выполнили более 1200 аттестаций</p>
            </div>
            <div class="service-row">
                <div class="col-1-2">
                    <div class="block-title">{{$service->title_field}}</div>
                    {!! $service->about_service_page_field  !!}
                    <p><a href="#" class="link">Перейти к услугам</a></p>
                </div>
                <div class="col-1-2">
                    <div class="law">
                        <img src="images/helm.png" alt="">
                        <p class="text">
                            Работы выполняются <br>
                            в строгом соответствии <br>
                            <a href="#">техники безопасности <br>
                                высотных работ РК</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="facts">
            <h2 class="big-title">ЦПА в фактах</h2>
            <ul class="facts-block">
                @foreach($facts->fact_group as $item)
                    <li class="fact"><img src="/images/{{$item->fact_pict_image->primary_link}}" alt="">
                        <p class="fact_text">
                            {!! $item->fact_title_field !!}
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <div class="clients-block">
        <h2 class="medium-title">Среди клиентов</h2>
        <ul class="clients-block">
            @foreach($clients->client_group as $item)
                <li class="client"><a href="{{$item->client_link_field}}"><img
                                src="/images/{{$item->client_pict_image->primary_link}}" alt=""></a></li>
            @endforeach
        </ul>
    </div>
@endsection