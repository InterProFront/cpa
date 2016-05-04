@section('join')
    <div class="white-popup join" id="join">
        <h3 class="popup_title">Записаться на обучение</h3>
        <div class="row">
            <p class="row-name">ФИО</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="name">
        </div>
        <div class="row">
            <p class="row-name">Почта</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="mail">
        </div>
        <div class="row">
            <button class="button">Отправить</button>
        </div>
    </div>
@endsection