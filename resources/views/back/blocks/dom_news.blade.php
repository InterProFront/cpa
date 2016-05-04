@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="title" data-block="dom_news" class="input block_pre_field" value="{{$dom_news->title_field}}" placeholder="Заголовок">
</div>
<div class="field-wrap ">
<label class="input-file">
<ul class="group-block group_container" data-block="dom_news" data-group="news" data-owner-id="0">
@foreach($dom_news->news_group as $item_news )
@include('back.blocks.groupitems.dom_news.news')
@endforeach
</ul>
  <button class="any_create" data-block="dom_news" data-group="news"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</label>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="dom_news" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection