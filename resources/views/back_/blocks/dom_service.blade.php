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
                               data-block="dom_service" value="{{$dom_service->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="dom_service" value="{{$dom_service->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="dom_service" value="{{$dom_service->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="dom_service" value="{{$dom_service->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="dom_service" value="{{$dom_service->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="dom_service" value="{{$dom_service->background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$dom_service->background_image->preview_link}}" class="preview"
                             data-field-name="background" data-block="dom_service">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$dom_service->background_image->alt}}" data-field-name="background"
                               data-block="dom_service">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="dom_service">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_title" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->seo_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: описание
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->seo_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Ключевые слова
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                СЕО: Текст
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_text" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->seo_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок
            </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->page_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Заголовок для главной страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="preview_text" data-block="dom_service"
                   class="input block_field" value="{{$dom_service->preview_text_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Тексто под заголовоком
            </label>
            <textarea data-field-type="text" data-field-name="page_content" data-block="dom_service"
                      class="input block_field" placeholder="Текст">{{$dom_service->page_content_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Текст для главной страницы
            </label>
            <textarea data-field-type="text" data-field-name="preview_content" data-block="dom_service"
                      class="input block_field" placeholder="Текст">{{$dom_service->preview_content_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <table>
                <thead>
                <tr>
                    <td>Название</td>
                    <td></td>
                    <td>Публикации</td>
                    <td>Сортировка</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody class="group-block group_container" data-block="dom_service" data-group="service"
                       data-owner-id="0">
                @foreach($dom_service->service_group as $item_service )
                    @include('back.blocks.groupitems.dom_service.service')
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="any_create" data-block="dom_service" data-group="service"
                                data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="dom_service" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection