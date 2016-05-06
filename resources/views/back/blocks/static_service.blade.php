@extends('back.layout')
@section('content')
    <?php $title = 'Услуги'?>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Титульное изображение
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                               data-block="static_service" value="{{$static_service->head_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                               data-block="static_service" value="{{$static_service->head_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                               data-block="static_service" value="{{$static_service->head_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                               data-block="static_service" value="{{$static_service->head_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                               data-block="static_service" value="{{$static_service->head_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_service->head_image->preview_link}}" class="preview"
                             data-field-name="head" data-block="static_service">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_service->head_image->alt}}" data-field-name="head"
                               data-block="static_service">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="head" data-field-type="image" data-block="static_service">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_service"
                   class="input block_pre_field" value="{{$static_service->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Описание услуг на странице "Услуги"
            </label>
            <textarea data-field-type="text" data-field-name="about_services" data-block="static_service"
                      class="input block_field" placeholder="Текст">{{$static_service->about_services_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Описание услуг на странице "Компания"
            </label>
            <textarea data-field-type="text" data-field-name="about_service_page" data-block="static_service"
                      class="input block_field"
                      placeholder="Текст">{{$static_service->about_service_page_field}}</textarea>
        </div>
        @include('back.blocks.dom_service')
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_service" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection