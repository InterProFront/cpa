@extends('front.layout')
@section('content')
    @include('front.service.meta')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
                <img src="/images/{{$service->background_image->primary_link}}" alt="{{$service->background_image->alt}}" class="page-title-image" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title">{{$service->page_name_field}}</h1>
            <div class="text-block center">
                <p>{{$service->page_content_field}}</p>
            </div>
            <div class="content-grid study">
                @foreach($service->service_group as $item)
                    <div class="page-block">
                        <a href="/services/{{$item->slug_field}}">
                            <div class="image-wrap">
                                <img src="/images/{{$item->background_image->preview_crop->link}}" alt="{{$item->background_image->alt}}">
                            </div>
                            <div class="text-wrap">
                                <p class="link"><span class="border">{{$item->preview_text_field}}</span></p>
                                <p class="description">{{$item->preview_content_field}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection