
<div class="study-block">
    <div class="wrap">
        <div class="col">
            <h2 class="medium-title">{{$item->service_name_field}}</h2>
            {!! $item->about_service_field !!}
            <p><a class="buy_service" href="#buy_service">Оформить заявку</a></p>
        </div>
        <div class="col">
            <div class="photo-block" id="gall_{{$i}}">
                @include('front.service.photo')

                <div class="hide-block">
                    <?php $it = 0 ?>
                    @foreach($item->service_image_group as $img)
                        <?php $it++ ?>
                        @if($it > 6)
                        <a href="/images/{{$img->serv_pict_image->original_link}}"></a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>