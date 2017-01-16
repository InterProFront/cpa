@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                               data-block="static_index_page" value="{{$static_index_page->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="static_index_page"
                               value="{{$static_index_page->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="static_index_page"
                               value="{{$static_index_page->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="static_index_page"
                               value="{{$static_index_page->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="static_index_page"
                               value="{{$static_index_page->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="static_index_page"
                               value="{{$static_index_page->background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_index_page->background_image->preview_link}}" class="preview"
                             data-field-name="background" data-block="static_index_page">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_index_page->background_image->alt}}" data-field-name="background"
                               data-block="static_index_page">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="static_index_page">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_title" data-block="static_index_page"
                   class="input block_field" value="{{$static_index_page->seo_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: описание страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_index_page"
                   class="input block_field" value="{{$static_index_page->seo_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: ключевые слова
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_index_page"
                   class="input block_field" value="{{$static_index_page->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: сео текст
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_text" data-block="static_index_page"
                   class="input block_field" value="{{$static_index_page->seo_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="static_index_page"
                   class="input block_field" value="{{$static_index_page->page_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст под заголовком
            </label>
            <textarea data-field-type="text" data-field-name="page_content" data-block="static_index_page"
                      class="input block_field"
                      placeholder="Текст">{{$static_index_page->page_content_field}}</textarea>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_index_page" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection