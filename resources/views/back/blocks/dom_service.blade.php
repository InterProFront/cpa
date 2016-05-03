<div class="block ">
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
        <tbody class="group-block group_container" data-block="dom_service" data-group="service" data-owner-id="0">
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
<div class="block buttons">
    <button class="btn btn-primary pull-right any_save" data-block="dom_service" data-entity="block" data-descr="">
        <span class="save_button">Сохранить</span>
    </button>
</div>