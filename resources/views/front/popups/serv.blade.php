@section('serv')
    <div class="white-popup mfp-with-anim mfp-hide" id="buy_service">
        <h3 class="popup_title">Заявка на услугу</h3>
        <div class="row">
            <p class="row-name">Имя</p>
            <input class="input popup_field popup-input" type="text" data-field-type="string" data-field-name="fio">
        </div>
        <div class="row">
            <p class="row-name">Почта</p>
            <input class="input popup_field popup-input" type="text" data-field-type="string" data-field-name="email">
        </div>
        <div class="row">
            <p class="row-name">Телефон</p>
            <input class="input popup_field popup-input" type="text" data-field-type="string" data-field-name="phone">
        </div>
        <div class="row">
            <p class="row-name">Услуга</p>
            <select class="input popup_field popup-input" type="text" data-field-type="string" data-field-name="service">
                @foreach($sv as $item)
                    {{--<option value="{{$item->service_name_field}}">{{$item->service_name_field}}</option>--}}
                @endforeach
            </select>
        </div>
        <div class="row">
            <button class="button send-mail" data-popup-id="buy_service" data-type-name="buy_service">Отправить</button>
        </div>
    </div>
@endsection