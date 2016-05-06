@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="dom_news"
                   class="input block_pre_field" value="{{$dom_news->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                               data-block="dom_news" value="{{$dom_news->head_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                               data-block="dom_news" value="{{$dom_news->head_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                               data-block="dom_news" value="{{$dom_news->head_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                               data-block="dom_news" value="{{$dom_news->head_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                               data-block="dom_news" value="{{$dom_news->head_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$dom_news->head_image->preview_link}}" class="preview"
                             data-field-name="head" data-block="dom_news">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$dom_news->head_image->alt}}" data-field-name="head"
                               data-block="dom_news">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="head" data-field-type="image" data-block="dom_news">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
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
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_news" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection