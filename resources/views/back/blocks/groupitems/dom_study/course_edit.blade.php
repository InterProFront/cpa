@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_course->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="course_title" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->course_title_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="cost_course" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->cost_course_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="name" data-block="dom_study"
                       data-group="course" class="input group_field" value="{{$item_course->name_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="dom_study"
                       data-group="course" class="input group_pre_field" value="{{$item_course->slug_field}}"
                       data-item-id="{{$item_course->id_field}}" placeholder="Строка">
            </div>
            <ul class="group-block group_container" data-block="dom_study" data-group="docs"
                data-owner-id="{{$item_course->id_field}}">
                @foreach($item_course->docs_group as $item_docs )
                    @include('back.blocks.groupitems.dom_study.docs')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_study" data-group="docs" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_course->id_field}}"> Добавить
            </button>
            <ul class="group-block group_container" data-block="dom_study" data-group="course_image"
                data-owner-id="{{$item_course->id_field}}">
                @foreach($item_course->course_image_group as $item_course_image )
                    @include('back.blocks.groupitems.dom_study.course_image')
                @endforeach
            </ul>
            <button class="any_create" data-block="dom_study" data-group="course_image" data-descr="Эл. первой группы"
                    data-owner-id="{{$item_course->id_field}}"> Добавить
            </button>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
            <textarea data-field-type="text" data-field-name="about_course" data-block="dom_study" data-group="course"
                      class="input group_field" data-item-id="{{$item_course->id_field}}"
                      placeholder="Текст">{{$item_course->about_course_field}}</textarea>
            </div>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="dom_study" data-group="course"
                        data-entity="groupitem"
                        data-item-id="{{$item_course->id_field}}" data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>
@endsection