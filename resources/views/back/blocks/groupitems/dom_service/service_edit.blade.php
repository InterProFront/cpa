@extends('back.layout')
@section('content')
    <?php $title = 'Услуги — ' . $item_service->service_name_field?>
    <li class="group" data-group-id="{{$item_service->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                    Название услуги
                </label>
                <input type="text" data-field-type="string" data-field-name="service_name" data-block="dom_service"
                       data-group="service" class="input group_field" value="{{$item_service->service_name_field}}"
                       data-item-id="{{$item_service->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Об услуге
                </label>
            <textarea data-field-type="text" data-field-name="about_service" data-block="dom_service"
                      data-group="service" class="input group_field" data-item-id="{{$item_service->id_field}}"
                      placeholder="Текст">{{$item_service->about_service_field}}</textarea>
            </div>
            <ul class="group-block group_container" data-block="dom_service" data-group="service_image"
                data-owner-id="{{$item_service->id_field}}">
                @foreach($item_service->service_image_group as $item_service_image )
                    @include('back.blocks.groupitems.dom_service.service_image')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_service" data-group="service_image"
                    data-descr="Эл. первой группы"
                    data-owner-id="{{$item_service->id_field}}"> Добавить
            </button>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_service" data-group="service"
                        data-entity="groupitem"
                        data-item-id="{{$item_service->id_field}}" data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>
@endsection