@section('header')
<header class="header">
    <div class="head">
        <div class="col-1-1">
            <div class="logo">
                <a href="/"><img src="/images/{{$all_site->logo_image->primary_link}}" alt="" class="logo"></a>
            </div>
            <div class="text">
                <ul>
                    <li>Центр</li>
                    <li>Промышленного</li>
                    <li>Альпинизма</li>
                </ul>
            </div>
        </div>
        <div class="col-1-1">
            <div class="row">
                <p class="phone">
                    <i class="phone-icon"></i>
                    <span class="code">(727)</span>
                    327-64-20
                </p>
            </div>
            <div class="row">
                <ul class="header-menu">
                    <li class="item"><a href="#join" class="link join">Записаться на обучение</a></li>
                    <li class="item"><a href="#ask" class="link ask">Задать вопрос</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
@endsection