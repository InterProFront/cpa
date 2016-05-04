@foreach($small_news as $item)
    <li class="news" data-id="{{$item->id_field}}">
        <p class="title"><a href="{{$item->link_field}}">{{$item->news_title_field}}</a></p>
        <p class="small">{{$item->news_date_field}}  •  <a href="#">{{$item->agregator_field}}</a></p>
    </li>
@endforeach