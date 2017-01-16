<?php
function Fra($str){

    $date = new DateTime($str);

    $str = (string)$date->format('d M Y');

    $str = str_replace(array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'),
            array('Января', 'Фервраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря'),
            $str);

    return $str;
}
?>@foreach($small_news as $item)
    <li class="news" data-id="{{$item->id_field}}">
        <p class="title"><a href="{{$item->link_field}}">{{$item->news_title_field}}</a></p>
        <p class="small"><?=Fra($item->news_date_field) ?>  •  <a href="#">{{$item->agregator_field}}</a></p>
    </li>
@endforeach