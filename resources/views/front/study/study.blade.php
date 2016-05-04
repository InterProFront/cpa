@extends('front.layout')
<?php $title = 'Учебный центр — Центр Промышленного Альпинизма'?>
@section('content')
    <section class="content">
        <div class="head-image">
            <img src="/images/{{$s_study->head_image->primary_link}}" alt="">
        </div>
        @include('front.study.menu')
        @yield('menu')
        <div class="company company-big">
            <h1 class="big-title">{{$s_study->title_field}}</h1>
            <div class="full-size-descr">
                {!! $s_study->about_study_field !!}
            </div>
            <?php $i = 0?>
            @foreach($study->course_group as $item)
                @include('front.study.study_item')
            @endforeach
        </div>
    </section>
@endsection