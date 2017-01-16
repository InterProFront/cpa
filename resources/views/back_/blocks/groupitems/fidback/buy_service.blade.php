<li class="group" data-group-id="{{$item_buy_service->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="fidback" data-group="buy_service" data-entity="groupitem"
                data-item-id="{{$item_buy_service->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="fio" data-block="fidback"
                   data-group="buy_service" class="input group_field" value="{{$item_buy_service->fio_field}}"
                   data-item-id="{{$item_buy_service->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="email" data-block="fidback"
                   data-group="buy_service" class="input group_field" value="{{$item_buy_service->email_field}}"
                   data-item-id="{{$item_buy_service->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="phone" data-block="fidback"
                   data-group="buy_service" class="input group_field" value="{{$item_buy_service->phone_field}}"
                   data-item-id="{{$item_buy_service->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="service" data-block="fidback"
                   data-group="buy_service" class="input group_field" value="{{$item_buy_service->service_field}}"
                   data-item-id="{{$item_buy_service->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="mailed" data-block="fidback"
                          data-group="buy_service" data-item-id="{{$item_buy_service->id_field}}"
                          class="input group_field" value="{{$item_buy_service->mailed_field}}">mailed</label>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="fidback" data-group="buy_service" data-entity="groupitem"
                    data-item-id="{{$item_buy_service->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>