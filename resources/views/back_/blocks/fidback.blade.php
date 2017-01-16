@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="mail_rec" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_rec_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="mail_username" data-block="fidback"
                   class="input block_field" value="{{$fidback->mail_username_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="site_name" data-block="fidback"
                   class="input block_field" value="{{$fidback->site_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                <ul class="group-block group_container" data-block="fidback" data-group="join" data-owner-id="0">
                    @foreach($fidback->join_group as $item_join )
                        @include('back.blocks.groupitems.fidback.join')
                    @endforeach
                </ul>
                <button class="any_create" data-block="fidback" data-group="join" data-descr="Эл. первой группы"
                        data-owner-id="0"> Добавить
                </button>
            </label>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                <ul class="group-block group_container" data-block="fidback" data-group="ask" data-owner-id="0">
                    @foreach($fidback->ask_group as $item_ask )
                        @include('back.blocks.groupitems.fidback.ask')
                    @endforeach
                </ul>
                <button class="any_create" data-block="fidback" data-group="ask" data-descr="Эл. первой группы"
                        data-owner-id="0"> Добавить
                </button>
            </label>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                <ul class="group-block group_container" data-block="fidback" data-group="buy_service" data-owner-id="0">
                    @foreach($fidback->buy_service_group as $item_buy_service )
                        @include('back.blocks.groupitems.fidback.buy_service')
                    @endforeach
                </ul>
                <button class="any_create" data-block="fidback" data-group="buy_service" data-descr="Эл. первой группы"
                        data-owner-id="0"> Добавить
                </button>
            </label>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection