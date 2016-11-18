@extends('front.layout')
<?php $title = 'Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
             <img src="https://www.zixcorp.com/sites/default/files/styles/page_image/public/Zix%20Slider-wo%20the%20Hassle%20(large,%20cropped)_full.jpg?itok=hzAFi1sI" alt="" class="page-title-image loaded" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title">Центр Промышленного альпинизма</h1>
            <div class="text-block center">
                <p>Это 6 предприятий в трех городах Казахстана, оказывающие <br>
                    профессиональные услуги высотных работ.</p>
            </div>
            <div class="content-grid">
                <div class="page-block">
                    <a href="/">
                        <div class="image-wrap">
                            <img src="/img/1.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">Обучение</span></p>
                            <p class="description">Обучение и повышение квалификации специалистов высотных работ.</p>
                        </div>
                    </a>
                </div>
                <div class="page-block">
                    <a href="/">
                        <div class="image-wrap">
                            <img src="/img/2.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">Услуги</span></p>
                            <p class="description">Професиональные услуги по высотным работам любой сложности</p>
                        </div>
                    </a>
                </div>
                <div class="page-block">
                    <a href="/">
                        <div class="image-wrap">
                            <img src="/img/3.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">Снаряжение</span></p>
                            <p class="description">Продажа и проверка оборудования и экипировки для высотных работ.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="facts">
            <h2 class="big-title">ЦПА в фактах</h2>
            <ul class="facts-block">
                @foreach($fact as $item)
                    <li class="fact">
                        <div class="img-wrap">
                            <img src="/images/{{$item->fact_pict_image->primary_link}}" alt="{{$item->fact_pict_image->alt}}">
                        </div>
                        <div class="text-wrap">
                            <p>{!! $item->fact_title_field !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection