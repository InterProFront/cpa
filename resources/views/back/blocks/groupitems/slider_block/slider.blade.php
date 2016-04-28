<li class="group" data-group-id="{{$item_slider->id_field}}">
    <div class="block ">
        <label class="input-file">
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="slider" data-group="slider"
                           data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="slider_block"
                           value="{{$item_slider->slider_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="slider" data-group="slider"
                           data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="slider_block"
                           value="{{$item_slider->slider_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="slider" data-group="slider"
                           data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="slider_block"
                           value="{{$item_slider->slider_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="slider" data-group="slider"
                           data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="slider_block"
                           value="{{$item_slider->slider_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="slider" data-group="slider"
                           data-field-type="image" data-item-id="{{$item_slider->id_field}}" data-block="slider_block"
                           value="{{$item_slider->slider_image->icon_link}}">
                </div>
                <div class="buttons">
                    <span class="refresh"></span>
                    <span class="clear"></span>
                </div>
                <img src="/images/{{$item_slider->slider_image->preview_link}}" class="preview" data-field-name="slider"
                     data-block="slider_block" data-group="slider" data-item-id="{{$item_slider->id_field}}">
                <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_slider->slider_image->alt}}"
                       data-item-id="{{$item_slider->id_field}}">
                <label class="file-input">
                    Картинка
                    <input type="file" accept="image/*"
                           class="input_file group_field"
                           data-field-name="slider"
                           data-group="slider"
                           data-entity="groupitem"
                           data-item-id="{{$item_slider->id_field}}"
                           data-field-type="image"
                           data-block="slider_block"
                    >
                </label>
            </div>
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="slide_name" data-block="slider_block"
                   data-group="slider" class="input group_field" value="{{$item_slider->slide_name_field}}"
                   data-item-id="{{$item_slider->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="slide_text" data-block="slider_block"
                   data-group="slider" class="input group_field" value="{{$item_slider->slide_text_field}}"
                   data-item-id="{{$item_slider->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block buttons_block">
        <button type="button" class="any_save" data-block="slider_block" data-group="slider" data-entity="groupitem"
                data-item-id="{{$item_slider->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete" data-block="slider_block" data-group="slider" data-entity="groupitem"
                data-item-id="{{$item_slider->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>