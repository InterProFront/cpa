@extends('front.layout')
@section('content')
    @include('front.study.meta')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
                <img src="/images/{{$study->background_image->primary_link}}" alt="{{$study->background_image->alt}}" class="page-title-image" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title">{{$study->page_name_field}}</h1>
            <div class="text-block center">
                <p>{{$study->page_content_field}}</p>
            </div>
            <div class="content-grid study">
                @foreach($study->course_group as $item)
                    <div class="page-block">
                        <a href="/study/{{$item->slug_field}}">
                            <div class="image-wrap">
                                <img src="/images/{{$item->background_image->preview_crop->link}}" alt="{{$item->background_image->alt}}">
                            </div>
                            <div class="text-wrap">
                                <p class="link"><span class="border">{{$item->preview_text_field}}</span></p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection