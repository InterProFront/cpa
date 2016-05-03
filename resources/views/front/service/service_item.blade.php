
<div class="study-block">
    <div class="wrap">
        <div class="col">
            <h2 class="medium-title">{{$item->course_title_field}}</h2>
            {{$item->about_course_field}}
            <p><a href="#">Оформить заявку</a></p>
        </div>
        <div class="col">
            <div class="photo-block" id="first">
                @include('front.study.photo')

                <div class="hide-block">
                    @foreach($item->course_image_group as $img)
                        <a href="/images/{{$img->course_pict_image->primary_link}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>