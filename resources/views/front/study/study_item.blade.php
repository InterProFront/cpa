
<div class="study-block">
    <div class="wrap">
        <div class="col">
            <h2 class="medium-title">{{$item->course_title_field}}</h2>
            {!!$item->about_course_field!!}
            <div class="docs">
                <h4 class="title">
                    Выдаваемые документы
                </h4>
                <ol>
                    @foreach($item->docs_group as $item_doc)
                        <li>{{$item_doc->docs_name_field}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
        <div class="col">
            <div class="photo-block" id="gall_{{$i}}">
                @include('front.study.photo')

                <div class="hide-block">
                    @foreach($item->course_image_group as $img)
                        <a href="/images/{{$img->course_pict_image->original_link}}"></a>
                    @endforeach
                </div>
            </div>
            <div class="cost">
                <p class="text">Стоимость курса</p>
                <p class="price">{{$item->cost_course_field}}</p>
                <button class="button join" href="#join">Записаться</button>
            </div>
        </div>
    </div>
</div>