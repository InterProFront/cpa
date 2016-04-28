@extends('back.layout')
@section('content')
    <?php $title='Техника безопасности'?>
    <div class="block ">
        <label class="input-file">
            <input type="text" data-field-type="string" data-field-name="title" data-block="safety_rules"
                   class="input block_pre_field" value="{{$safety_rules->title_field}}" placeholder="Заголовок">
        </label>
    </div>
    <div class="block ">
        <label class="input-file">
            <textarea data-field-type="text" data-field-name="rules_text" data-block="safety_rules"
                      class="input block_field" placeholder="Текст">{{$safety_rules->rules_text_field}}</textarea>
        </label>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="safety_rules" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection