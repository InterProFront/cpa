@extends('back.layout')
@section('content')
    <div class="block ">
        <table>
            <thead>
            <tr>
                <td>Название</td>
                <td></td>
                <td>Публикации</td>
                <td>Сортировка</td>
                <td>Редактировать</td>
                <td>Удалить</td>
            </tr>
            </thead>
            <tbody class="group-block group_container" data-block="dom_study" data-group="course" data-owner-id="0">
            @foreach($dom_study->course_group as $item_course )
                @include('back.blocks.groupitems.dom_study.course')
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="any_create" data-block="dom_study" data-group="course" data-descr="Эл. первой группы"
                            data-owner-id="0"> Добавить
                    </button>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="block buttons">
        <button class="btn btn-primary pull-right any_save" data-block="dom_study" data-entity="block" data-descr="">
            <span class="save_button">Сохранить</span>
        </button>
    </div>
@endsection