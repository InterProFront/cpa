@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="title" data-block="safety_rules" class="input block_pre_field" value="{{$safety_rules->title_field}}" placeholder="Заголовок">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<textarea data-field-type="text" data-field-name="rules_text" data-block="safety_rules" class="input block_field" placeholder="Текст">{{$safety_rules->rules_text_field}}</textarea>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="safety_rules" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection