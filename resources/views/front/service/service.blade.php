@extends('front.layout')
<?php $title = 'Услуги — Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content">
        <div class="head-image">
            <img src="/images/{{$s_study->head_image->primary_link}}" alt="">
        </div>
        @include('front.service.menu')
        @yield('menu')
        <div class="company company-big">
            <h1 class="big-title">{{$s_study->title_field}}</h1>
            <div class="full-size-descr service">
                {!! $s_study->about_services_field !!}
            </div>
            <?php $i = 0?>
            @foreach($service->service_group as $item)
                @include('front.service.service_item')
            @endforeach
        </div>
    </section>
@endsection