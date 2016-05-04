@extends('back.layout')
@section('content')
    <?php $title = 'Компания'?>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="title" data-block="static_company"
                   class="input block_pre_field" value="{{$static_company->title_field}}" placeholder="Заголовок">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="about_company" data-block="static_company"
                      class="input block_field" placeholder="Текст">{{$static_company->about_company_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="say_text" data-block="static_company"
                      class="input block_field" placeholder="Текст">{{$static_company->say_text_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="people_name" data-block="static_company"
                   class="input block_field" value="{{$static_company->people_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="iqsa" data-block="static_company"
                   class="input block_field" value="{{$static_company->iqsa_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="people_photo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->people_photo_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="people_photo" data-field-type="image"
                               data-block="static_company"
                               value="{{$static_company->people_photo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="people_photo" data-field-type="image"
                               data-block="static_company"
                               value="{{$static_company->people_photo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="people_photo"
                               data-field-type="image" data-block="static_company"
                               value="{{$static_company->people_photo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="people_photo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->people_photo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_company->people_photo_image->preview_link}}" class="preview"
                             data-field-name="people_photo" data-block="static_company">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_company->people_photo_image->alt}}" data-field-name="people_photo"
                               data-block="static_company">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="people_photo" data-field-type="image" data-block="static_company">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="iqsa_logo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->iqsa_logo_image->prefix}}">
                        <input type="hidden" class="preview_link" data-field-name="iqsa_logo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->iqsa_logo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="iqsa_logo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->iqsa_logo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="iqsa_logo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->iqsa_logo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="iqsa_logo" data-field-type="image"
                               data-block="static_company" value="{{$static_company->iqsa_logo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_company->iqsa_logo_image->preview_link}}" class="preview"
                             data-field-name="iqsa_logo" data-block="static_company">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_company->iqsa_logo_image->alt}}" data-field-name="iqsa_logo"
                               data-block="static_company">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="iqsa_logo" data-field-type="image" data-block="static_company">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_company" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection