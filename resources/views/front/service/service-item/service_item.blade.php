@extends('front.layout')
@section('content')
    @include('front.study.study-item.meta')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
                <img src="/images/{{$study_item->background_image->primary_link}}" alt="{{$study_item->background_image->alt}}" class="page-title-image" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title left">{{$study_item->page_name_field}}</h1>
            <div class="grid">
                <div class="col-1-2">
                    <div class="text-block">
                        {!!  $study_item->page_content_field!!}
                    </div>
                </div>
                <div class="col-1-2">
                    <div class="photo-block">
                        @include('front.service.service-item.photo',['item' => $study_item])
                    </div>
                </div>
            </div>
            <div class="cost-block">
                <h2 class="cost-title">Стоимость курса — {{$study_item->cost_field}}</h2>
                <div class="button-wrap">
                    <button class="button actvate-class">Записаться на курс</button>
                </div>
            </div>
        </div>
    </section>
@endsection