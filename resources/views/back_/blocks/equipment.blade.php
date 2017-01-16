@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Изображенее для главной страницы
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="index_preview" data-field-type="image"
                               data-block="equipment" value="{{$equipment->index_preview_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="index_preview"
                               data-field-type="image" data-block="equipment"
                               value="{{$equipment->index_preview_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="index_preview"
                               data-field-type="image" data-block="equipment"
                               value="{{$equipment->index_preview_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="index_preview"
                               data-field-type="image" data-block="equipment"
                               value="{{$equipment->index_preview_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="index_preview"
                               data-field-type="image" data-block="equipment"
                               value="{{$equipment->index_preview_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="index_preview" data-field-type="image"
                               data-block="equipment" value="{{$equipment->index_preview_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$equipment->index_preview_image->preview_link}}" class="preview"
                             data-field-name="index_preview" data-block="equipment">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$equipment->index_preview_image->alt}}" data-field-name="index_preview"
                               data-block="equipment">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="index_preview" data-field-type="image" data-block="equipment">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="preview_text" data-block="equipment"
                   class="input block_field" value="{{$equipment->preview_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Ссылка на магазин
            </label>
            <input type="text" data-field-type="string" data-field-name="link" data-block="equipment"
                   class="input block_field" value="{{$equipment->link_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст под заголовоком
            </label>
            <textarea data-field-type="text" data-field-name="preview_content" data-block="equipment"
                      class="input block_field" placeholder="Текст">{{$equipment->preview_content_field}}</textarea>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="equipment" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection