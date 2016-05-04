<li class="group" data-group-id="{{$item_docs->id_field}}">
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="docs_name" data-block="dom_study"
                   data-group="docs" class="input group_field" value="{{$item_docs->docs_name_field}}"
                   data-item-id="{{$item_docs->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_study" data-group="docs" data-entity="groupitem"
                    data-item-id="{{$item_docs->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
            <button type="button" class="any_delete" data-block="dom_study" data-group="docs" data-entity="groupitem"
                    data-item-id="{{$item_docs->id_field}}" data-descr="Эл. первой группы"> Удалить
            </button>
        </div>
    </div>
</li>