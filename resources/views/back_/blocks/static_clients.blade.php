@extends('back.layout')
@section('content')
    <?php $title = 'Клиенты'?>
    <div class="block ">
        <div class="field-wrap ">
            <ul class="group-block group_container" data-block="static_clients" data-group="client"
                data-owner-id="0">
                @foreach($static_clients->client_group as $item_client )
                    @include('back.blocks.groupitems.static_clients.client')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_clients" data-group="client"
                    data-descr="Эл. первой группы" data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_clients" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection