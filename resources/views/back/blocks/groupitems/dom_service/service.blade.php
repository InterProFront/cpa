<tr data-sorter="{{$item_service->sorter_field}}" data-id="{{$item_service->id_field}}">
    <td><a href="">{{$item_service->service_name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_service->show_field)
                <option value="true" selected> Опубликовано</option>
                <option value="false">Не опубликовано</option>
            @else
                <option value="true"> Опубликовано</option>
                <option value="false" selected>Не опубликовано</option>
            @endif
        </select>
    </td>
    <td>
        <div class="sort_buttons">
            <div class="up-button"></div>
            <div class="down-button"></div>
        </div>
    </td>
    <td><a href="/adm/edit/service/{{$item_service->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="dom_service" data-group="service" data-entity="groupitem"
                data-item-id="{{$item_service->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
