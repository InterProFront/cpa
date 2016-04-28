@extends('back.layout')
@section('content')
<div class="block ">
<label class="input-file">
<div class="image-load">
    <div class="img-hide-block">
        <input type="hidden" class="prefix" data-field-name="logo" data-field-type="image" data-block="static_all_site" value="{{$static_all_site->logo_image->preview_link}}">
        <input type="hidden" class="preview_link" data-field-name="logo" data-field-type="image" data-block="static_all_site" value="{{$static_all_site->logo_image->preview_link}}">
        <input type="hidden" class="primary_link" data-field-name="logo" data-field-type="image" data-block="static_all_site" value="{{$static_all_site->logo_image->primary_link}}">
        <input type="hidden" class="secondary_link" data-field-name="logo" data-field-type="image" data-block="static_all_site" value="{{$static_all_site->logo_image->secondary_link}}">
        <input type="hidden" class="icon_link" data-field-name="logo" data-field-type="image" data-block="static_all_site" value="{{$static_all_site->logo_image->icon_link}}">
    </div>
    <div class="buttons">
        <span class="refresh"></span>
        <span class="clear"></span>
    </div>
    <img src="/images/{{$static_all_site->logo_image->preview_link}}" class="preview" data-field-name="logo" data-block="static_all_site">
    <input type="text" placeholder="alt текст" class="alt-text" value="{{$static_all_site->logo_image->alt}}" data-field-name="logo" data-block="static_all_site">
    <label class="file-input">
        Картинка
        <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="logo" data-field-type="image" data-block="static_all_site">
    </label>
</div>
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="phone" data-block="static_all_site" class="input block_field" value="{{$static_all_site->phone_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="mob_phone" data-block="static_all_site" class="input block_field" value="{{$static_all_site->mob_phone_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="map_link" data-block="static_all_site" class="input block_field" value="{{$static_all_site->map_link_field}}" placeholder="Строка">
</label>
</div>
<div class="block ">
<label class="input-file">
<input type="text" data-field-type="string" data-field-name="copy" data-block="static_all_site" class="input block_field" value="{{$static_all_site->copy_field}}" placeholder="Строка">
</label>
</div>
<div class="block buttons">
<button class="btn btn-primary pull-right any_save" data-block="static_all_site" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
@endsection