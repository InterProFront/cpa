@extends('back.layout')
@section('content')
    <?php $title='Новости'?>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_news"
                   class="input block_pre_field" value="{{$dom_news->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <ul class="group-block group_container" data-block="dom_news" data-group="news" data-owner-id="0">
                @foreach($dom_news->news_group as $item_news )
                    @include('back.blocks.groupitems.dom_news.news')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_news" data-group="news" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="dom_news" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection