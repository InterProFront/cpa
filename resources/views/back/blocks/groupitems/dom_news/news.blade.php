<li class="group" data-group-id="{{$item_news->id_field}}">
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="news_title" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->news_title_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="news_date" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->news_date_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="agregator" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->agregator_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <textarea data-field-type="text" data-field-name="about_news" data-block="dom_news" data-group="news"
                      class="input group_field" data-item-id="{{$item_news->id_field}}"
                      placeholder="Текст">{{$item_news->about_news_field}}</textarea>
        </label>
    </div>
    <div class="block buttons_block">
        <button type="button" class="any_save" data-block="dom_news" data-group="news" data-entity="groupitem"
                data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Сохранить
        </button>
        <button type="button" class="any_delete" data-block="dom_news" data-group="news" data-entity="groupitem"
                data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
</li>