@extends('back.layout')
@section('content')
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="title" data-block="static_service" class="input block_pre_field" value="{{$static_service->title_field}}" placeholder="Заголовок">
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about_services" data-block="static_service" class="input block_field" placeholder="Текст">{{$static_service->about_services_field}}</textarea>
</label>
</div>
<div class="block ">
<label class="input-file">
<textarea data-field-type="text" data-field-name="about_service_page" data-block="static_service" class="input block_field" placeholder="Текст">{{$static_service->about_service_page_field}}</textarea>
</label>
</div>
<div class="block buttons">
<button class="btn btn-primary pull-right any_save" data-block="static_service" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
@endsection