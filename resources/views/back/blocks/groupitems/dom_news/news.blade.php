<li class="group" data-group-id="{{$item_news->id_field}}">
    <div class="title-block">
        <lable class="group-title">Фотография курса</lable>
        <<button type="button" class="any_delete" data-block="dom_news" data-group="news" data-entity="groupitem"
                 data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="link" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->link_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="news_title" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->news_title_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="news_date" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->news_date_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="agregator" data-block="dom_news"
                   data-group="news" class="input group_field" value="{{$item_news->agregator_field}}"
                   data-item-id="{{$item_news->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="about_news" data-block="dom_news" data-group="news"
                      class="input group_field" data-item-id="{{$item_news->id_field}}"
                      placeholder="Текст">{{$item_news->about_news_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="dom_news" data-group="news" data-entity="groupitem"
                    data-item-id="{{$item_news->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>