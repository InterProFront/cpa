@extends('back.layout')
@section('content')
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="title" data-block="static_study" class="input block_pre_field" value="{{$static_study->title_field}}" placeholder="Заголовок">
</label>
</div>
<div class="block buttons">
<button class="btn btn-primary pull-right any_save" data-block="static_study" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
@endsection