@section('footer')
    <footer class="footer">
        <div class="footer-img">
            <div class="footer-image-wrap"><img src="/images/footer.png" alt=""></div>
        </div>
        <div class="foot">
            <div class="col-1-2">
                <p class="adress">Республика Казахстан, 050000, Алматы <br>
                    ул. Макатаева 127, офис 301 <br>
                    <a href="{{$all_site->map_link_field}}">Карта проезда</a>
                </p>
                <p class="copy">{{$all_site->copy_field}}</p>
            </div>
            <div class="col-1-2">
                <ul class="contacts">
                    <li>
                        <p>{{$all_site->phone_field}}</p>
                    </li>
                    <li>
                        <p>{{$all_site->mob_phone_field}}</p>
                    </li>
                    <li>
                        <p><a href="mailto:info@cpa.kz">info@cpa.kz</a></p>
                    </li>
                </ul>
                <p>Сделано в <a target="_blank" href="http://interpro.kz">ИнтерПро</a></p>
            </div>
        </div>
    </footer>
@endsection