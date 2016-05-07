
<div class="study-block">
    <div class="wrap">
        <div class="col">
            <h2 class="medium-title">{{$item->service_name_field}}</h2>
            {!! $item->about_service_field !!}
            <p><a class="buy_service" href="#buy_service">Оформить заявку</a></p>
        </div>
        <div class="col">
            <div class="photo-block" id="first">
                @include('front.service.photo')

                <div class="hide-block">
                    @foreach($item->service_image_group as $img)
                        <a href="/images/{{$img->serv_pict_image->primary_link}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>