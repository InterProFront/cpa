<li class="group" data-group-id="{{$item_images_set->id_field}}">
    <div class="block ">
        <label class="input-file">
            <div class="image-load">
                <div class="img-hide-block">
                    <input type="hidden" class="prefix" data-field-name="text_pict" data-group="images_set"
                           data-field-type="image" data-item-id="{{$item_images_set->id_field}}"
                           data-block="dom_all_images" value="{{$item_images_set->text_pict_image->icon_link}}">
                    <input type="hidden" class="preview_link" data-field-name="text_pict" data-group="images_set"
                           data-field-type="image" data-item-id="{{$item_images_set->id_field}}"
                           data-block="dom_all_images" value="{{$item_images_set->text_pict_image->preview_link}}">
                    <input type="hidden" class="primary_link" data-field-name="text_pict" data-group="images_set"
                           data-field-type="image" data-item-id="{{$item_images_set->id_field}}"
                           data-block="dom_all_images" value="{{$item_images_set->text_pict_image->primary_link}}">
                    <input type="hidden" class="secondary_link" data-field-name="text_pict" data-group="images_set"
                           data-field-type="image" data-item-id="{{$item_images_set->id_field}}"
                           data-block="dom_all_images" value="{{$item_images_set->text_pict_image->secondary_link}}">
                    <input type="hidden" class="icon_link" data-field-name="text_pict" data-group="images_set"
                           data-field-type="image" data-item-id="{{$item_images_set->id_field}}"
                           data-block="dom_all_images" value="{{$item_images_set->text_pict_image->icon_link}}">
                </div>
                <img src="/images/{{$item_images_set->text_pict_image->preview_link}}" class="preview"
                     data-field-name="text_pict" data-block="dom_all_images" data-group="images_set"
                     data-item-id="{{$item_images_set->id_field}}">
                <div class="image-block-wrap">
                    <input type="text" placeholder="alt текст" class="alt-text"
                           value="{{$item_images_set->text_pict_image->alt}}"
                           data-item-id="{{$item_images_set->id_field}}">

                    <label class="file-input">
                        Загрузить
                        <input type="file" accept="image/*"
                               class="input_file group_field"
                               data-field-name="text_pict"
                               data-group="images_set"
                               data-entity="groupitem"
                               data-item-id="{{$item_images_set->id_field}}"
                               data-field-type="image"
                               data-block="dom_all_images"
                        >
                    </label>
                </div>
            </div>
        </label>
    </div>
    <div class="block buttons_block">
        <button type="button" class="any_save" data-block="dom_all_images" data-group="images_set"
                data-entity="groupitem" data-item-id="{{$item_images_set->id_field}}" data-descr="Эл. первой группы">
            Сохранить
        </button>
        <button type="button" class="any_delete" data-block="dom_all_images" data-group="images_set"
                data-entity="groupitem" data-item-id="{{$item_images_set->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>