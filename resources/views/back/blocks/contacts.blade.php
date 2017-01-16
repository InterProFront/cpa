@extends('back.layout')
@section('content')
    <div class="block ">
        {{--Картинка--}}
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="contacts" value="{{$contacts->background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$contacts->background_image->preview_link}}" class="preview"
                             data-field-name="background" data-block="contacts">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$contacts->background_image->alt}}" data-field-name="background"
                               data-block="contacts">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="contacts">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{--СЕО тайтл--}}
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_title" data-block="contacts"
                   class="input block_field" value="{{$contacts->seo_title_field}}" placeholder="Строка">
        </div>
        {{--СЕО описание--}}
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Описание страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="contacts"
                   class="input block_field" value="{{$contacts->seo_description_field}}" placeholder="Строка">
        </div>
        {{--СЕО ключевые слова--}}
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Ключевые слова
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="contacts"
                   class="input block_field" value="{{$contacts->seo_keywords_field}}" placeholder="Строка">
        </div>
        {{--СЕО текст--}}
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Текст
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_text" data-block="contacts"
                   class="input block_field" value="{{$contacts->seo_text_field}}" placeholder="Строка">
        </div>
        {{-- Заголовок страницы --}}
        <div class="field-wrap ">
            <label class="input-file">
                Главный заголовок страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="contacts"
                   class="input block_field" value="{{$contacts->page_name_field}}" placeholder="Строка">
        </div>
        {{-- Адрес --}}
        <div class="field-wrap ">
            <label class="input-file">
                Адрес
            </label>
            <input type="text" data-field-type="string" data-field-name="adress" data-block="contacts"
                   class="input block_field" value="{{$contacts->adress_field}}" placeholder="Строка">
        </div>

        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="contacts" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection