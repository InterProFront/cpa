@section('join')
    <div class="white-popup " id="join">
        <h3 class="popup_title">Записаться на обучение</h3>
        <div class="row">
            <p class="row-name">Имя</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="fio">
        </div>
        <div class="row">
            <p class="row-name">Почта</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="email">
        </div>
        <div class="row">
            <p class="row-name">Телефон</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="phone">
        </div>
        <div class="row">
            <p class="row-name">Программа</p>
            <select class="input popup_field" type="text" data-field-type="string" data-field-name="program">
                @foreach($st as $item)
                    <option value="{{$item->course_title_field}}">{{$item->course_title_field}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <button class="button send-mail" data-popup-id="join" data-type-name="join">Отправить</button>
        </div>
    </div>
@endsection