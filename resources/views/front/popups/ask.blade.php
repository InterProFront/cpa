@section('ask')
    <div class="white-popup" id="ask">
        <h3 class="popup_title">Задать вопрос</h3>
        <div class="row">
            <p class="row-name">Имя</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="name">
        </div>
        <div class="row">
            <p class="row-name">Почта</p>
            <input class="input popup_field" type="text" data-field-type="string" data-field-name="mail">
        </div>
        <div class="row">
            <p class="row-name">Вопрос</p>
            <textarea class="input popup_field" cols="30" rows="10" data-field-type="text"
                      data-field-name="question"></textarea>
        </div>
        <div class="row">
            <button class="button">Отправить</button>
        </div>
    </div>
@endsection