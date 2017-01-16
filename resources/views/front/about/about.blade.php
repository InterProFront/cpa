@extends('front.layout')
@section('content')
    @include('front.about.meta')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
                <img src="/images/{{$about->background_image->primary_link}}" alt="{{$about->background_image->alt}}" class="page-title-image" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title">{{$about->page_name_field}}</h1>
            <div class="text-block">
                {!! $about->page_content_field !!}
            </div>
        </div>
    </section>
@endsection