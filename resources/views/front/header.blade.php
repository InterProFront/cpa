@section('header')
    <header class="header">
        <div class="head">
            <div class="col-1-3">
                <div class="wrap">
                    <a href="#ask" class="link ask">Задать вопрос</a>
                </div>
            </div>
            <div class="col-1-3">
                <div class="logo">
                    <a href="/"><img src="/images/{{$all_site->logo_image->primary_link}}"
                                     alt="{{$all_site->logo_image->alt}}" class="logo"></a>
                </div>
                <div class="site-slogan">Центр Промышленного альпинизма</div>
            </div>
            <div class="col-1-3">
                <div class="wrap">
                    <p class="phone"><span class="code">(727)</span> 327-64-20</p>
                </div>
            </div>
        </div>
        <nav class="main-menu-wrap">
            <button type="button" class="hamburger hamburger--slider">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </button>
            <div class="popup-wrap">
                <ul class="main-menu">
                    <li class="menu-item"><a href="/">Обучение</a></li>
                    <li class="menu-item"><a href="/">Услуги</a></li>
                    <li class="menu-item"><a href="/">Снаряжение</a></li>
                    <li class="menu-item"><a href="/">О компании</a></li>
                    <li class="menu-item"><a href="/">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>
@endsection