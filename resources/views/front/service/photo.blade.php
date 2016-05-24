<?php $c = 0 ?>
<div class="row">
@foreach($item->service_image_group as $img)
    <?php $c++ ?>
        @if($c == 1)
            <div class="col-2-3">
                <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->big_crop->link}}" alt=""></a>
            </div>
        @elseif($c == 2)
            <div class="col-1-3">
                <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->small_crop->link}}" alt=""></a>
        @elseif($c == 3)
                <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->small_crop->link}}" alt=""></a>
            </div>
        @elseif($c == 4)
            </div>
            <div class="row">
                <div class="col-1-3">
                    <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->small_crop->link}}" alt=""></a>
        @elseif($c == 5)
        </div>
        <div class="col-1-3">
            <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->small_crop->link}}" alt=""></a>
        @elseif($c == 6)
            </div>
            <div class="col-1-3">
                <a href="/images/{{$img->serv_pict_image->original_link}}"><img src="/images/{{$img->serv_pict_image->small_crop->link}}" alt=""></a>
            </div>
            </div>
        @endif
@endforeach
