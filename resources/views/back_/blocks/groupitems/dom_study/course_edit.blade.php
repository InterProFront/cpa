@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_course->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_course->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="dom_study" data-group="course"
                                 data-item-id="{{$item_course->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_course->background_image->alt}}"
                                   data-item-id="{{$item_course->id_field}}" data-field-name="background"
                                   data-block="dom_study">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image" data-block="dom_study"
                                       data-group="course" data-item-id="{{$item_course->id_field}}"
                                       data-entity="groupitem">
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
                            <input type="hidden" class="prefix" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="preview" data-group="course"
                                   data-field-type="image" data-item-id="{{$item_course->id_field}}"
                                   data-block="dom_study" value="{{$item_course->preview_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_course->preview_image->preview_link}}" class="preview"
                                 data-field-name="preview" data-block="dom_study" data-group="course"
                                 data-item-id="{{$item_course->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_course->preview_image->alt}}"
                                   data-item-id="{{$item_course->id_field}}" data-field-name="preview"
                                   data-block="dom_study">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="preview" data-field-type="image" data-block="dom_study"
                                       data-group="course" data-item-id="{{$item_course->id_field}}"
                                       data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_title" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->seo_title_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    slug
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_study"
                       data-group="course" class="input group_pre_field" value="{{$item_course->slug_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->seo_description_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->seo_keywords_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    cost
                </label>
                <input type="text" data-field-type="string" data-field-name="cost" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->cost_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_text" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->seo_text_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->page_name_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="preview_text" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->preview_text_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="page_content" data-block="dom_study"
                          data-group="course" class="input group_field" data-item-id="{{$item_course->id_field}}"
                          placeholder="Текст">{{$item_course->page_content_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="preview_content" data-block="dom_study"
                          data-group="course" class="input group_field" data-item-id="{{$item_course->id_field}}"
                          placeholder="Текст">{{$item_course->preview_content_field}}</textarea>
            </div>


            <ul class="group-block group_container" data-block="dom_study" data-group="course"
                data-owner-id="{{$item_course->id_field}}">
                @foreach($item_course->course_image_group as $item_course_image )
                    @include('back.blocks.groupitems.dom_study.course_image')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_study" data-group="course_image" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_course->id_field}}"> Добавить
            </button>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_study" data-group="course"
                        data-entity="groupitem" data-item-id="{{$item_course->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection