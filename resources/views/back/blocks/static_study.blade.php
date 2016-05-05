@extends('back.layout')
@section('content')
    <?php $title = 'Учебный центр'?>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_study"
                   class="input block_pre_field" value="{{$static_study->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="head" data-field-type="image"
                               data-block="static_study" value="{{$static_study->head_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="head" data-field-type="image"
                               data-block="static_study" value="{{$static_study->head_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="head" data-field-type="image"
                               data-block="static_study" value="{{$static_study->head_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="head" data-field-type="image"
                               data-block="static_study" value="{{$static_study->head_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="head" data-field-type="image"
                               data-block="static_study" value="{{$static_study->head_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_study->head_image->preview_link}}" class="preview"
                             data-field-name="head" data-block="static_study">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_study->head_image->alt}}" data-field-name="head"
                               data-block="static_study">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="head" data-field-type="image" data-block="static_study">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="about_study" data-block="static_study"
                      class="input block_field" placeholder="Текст">{{$static_study->about_study_field}}</textarea>
        </div>
        @include('back.blocks.dom_study')
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_study" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection