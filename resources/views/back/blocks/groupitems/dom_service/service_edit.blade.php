@extends('back.layout')
@section('content')
<li class="group" data-group-id="{{$item_service->id_field}}"><div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="service_name" data-block="dom_service" data-group="service" class="input group_field" value="{{$item_service->service_name_field}}" data-item-id="{{$item_service->id_field}}" placeholder="Строка">
</label>
</div>
<ul class="group-block group_container" data-block="dom_service" data-group="0" data-owner-id="{{$item_0->id_field}}">
@foreach($dom_service->service_image_group as $item_service_image )
@include('back.blocks.groupitems.dom_service.service_image')
@endforeach
</ul>
  <button class="any_create" data-block="dom_service" data-group="service_image"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about_service" data-block="dom_service" data-group="service" class="input group_field" data-item-id="{{$item_service->id_field}}" placeholder="Текст">{{$item_service->about_service_field}}</textarea>
</label>
</div>
<ul class="group-block group_container" data-block="dom_service" data-group="0" data-owner-id="{{$item_0->id_field}}">
@foreach($dom_service->service_image_group as $item_service_image )
@include('back.blocks.groupitems.dom_service.service_image')
@endforeach
</ul>
  <button class="any_create" data-block="dom_service" data-group="service_image"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
<div class="block buttons">
<button type="button" class="any_save" data-block="dom_service" data-group="service" data-entity="groupitem" data-item-id="{{$item_service->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</li>@endsection