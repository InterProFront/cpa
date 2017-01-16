@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <section class="content-wrap">
        <div class="page-head">
            <div class="preload">
             <img src="/images/{{$index->background_image->primary_link}}" alt="{{$index->background_image->alt}}" class="page-title-image" data-preload="">
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title">{{$index->page_name_field}}</h1>
            <div class="text-block center">
                {!! $index->page_content_field !!}
            </div>
            <div class="content-grid">
                <div class="page-block">
                    <a href="/study">
                        <div class="image-wrap">
                            <img src="/images/{{$study->background_image->preview_crop->link}}" alt="{{$study->index_preview_image->alt}}">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">{{$study->preview_text_field}}</span></p>
                            <p class="description">{{$study->preview_content_field}}</p>
                        </div>
                    </a>
                </div>

                <div class="page-block">
                    <a href="/services">
                        <div class="image-wrap">
                            <img src="/images/{{$service->background_image->preview_crop->link}}" alt="{{$service->index_preview_image->alt}}">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">{{$service->preview_text_field}}</span></p>
                            <p class="description">{{$service->preview_content_field}}</p>
                        </div>
                    </a>
                </div>

                <div class="page-block">
                    <a href="{{$equipment->link_field}}" target="_blank">
                        <div class="image-wrap">
                            <img src="/images/{{$equipment->index_preview_image->preview_crop->link}}" alt="{{$equipment->index_preview_image->alt}}">
                        </div>
                        <div class="text-wrap">
                            <p class="link"><span class="border">{{$equipment->preview_text_field}}</span></p>
                            <p class="description">{{$equipment->preview_content_field}}</p>
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