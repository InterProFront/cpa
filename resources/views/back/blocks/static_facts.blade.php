@extends('back.layout')
@section('content')
    <?php $title = 'Факты'?>
    <div class="block ">
        <div class="field-wrap ">
                <ul class="group-block group_container" data-block="static_facts" data-group="fact" data-owner-id="0">
                    @foreach($static_facts->fact_group as $item_fact )
                        @include('back.blocks.groupitems.static_facts.fact')
                    @endforeach
                </ul>
                <button class="any_create" data-block="static_facts" data-group="fact" data-descr="Эл. первой группы"
                        data-owner-id="0"> Добавить
                </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_facts" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection