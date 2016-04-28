@extends('back.layout')
@section('content')
<li class="group" data-group-id="{{$item_course->id_field}}"><div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="course_title" data-block="dom_study" data-group="course" class="input group_field" value="{{$item_course->course_title_field}}" data-item-id="{{$item_course->id_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="cost_course" data-block="dom_study" data-group="course" class="input group_field" value="{{$item_course->cost_course_field}}" data-item-id="{{$item_course->id_field}}" placeholder="Строка">
</label>
</div>
<ul class="group-block group_container" data-block="dom_study" data-group="0" data-owner-id="{{$item_0->id_field}}">
@foreach($dom_study->course_image_group as $item_course_image )
@include('back.blocks.groupitems.dom_study.course_image')
@endforeach
</ul>
  <button class="any_create" data-block="dom_study" data-group="course_image"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about_course" data-block="dom_study" data-group="course" class="input group_field" data-item-id="{{$item_course->id_field}}" placeholder="Текст">{{$item_course->about_course_field}}</textarea>
</label>
</div>
<ul class="group-block group_container" data-block="dom_study" data-group="0" data-owner-id="{{$item_0->id_field}}">
@foreach($dom_study->course_image_group as $item_course_image )
@include('back.blocks.groupitems.dom_study.course_image')
@endforeach
</ul>
  <button class="any_create" data-block="dom_study" data-group="course_image"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
<div class="block buttons">
<button type="button" class="any_save" data-block="dom_study" data-group="course" data-entity="groupitem" data-item-id="{{$item_course->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</li>@endsection