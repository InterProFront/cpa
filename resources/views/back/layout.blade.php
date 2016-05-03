<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{{$title or "Панель управления"}}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/admin/js/jquery-1.8.3.js"></script>

    @include('back/scripts')
    @yield('scripts')
</head>
<body>
<header class="header">
    <p class="site-name">CPA — Центр Промышленного Альпинизма</p>
    <div class="button">
        <a href="/auth/logout" class="logout">Выход</a>
    </div>
</header>

<div class="main-content">
    <aside class="left-side-bar">
        <nav class="main-menu">
            <ul id="menu">
                <li><span class="menu-title">Страницы</span>
                    <ul>
                        <li><a href="/adm/edit/about">Компания</a></li><li>
                        <li><a href="/adm/edit/study">Учебный центр</a></li>
                        <li><a href="/adm/edit/safety">Техника безопасности</a></li>
                        <li><a href="/adm/edit/all">Общее</a></li>
                        <li><a href="/adm/edit/clients">Клиенты</a></li>
                        <li><a href="/adm/edit/news">Новости</a></li>
                        <li><a href="/adm/edit/contacts">Контакты</a></li>
                    </ul>
                </li>
                <li><span class="menu-title">Специальные блоки</span>
                    <ul>
                        <li><a href="/adm/edit/service">Услуги</a></li>
                        <li><a href="/adm/edit/facts">Факты</a></li>
                        <li><a href="/adm/edit/slider">Слайдер</a></li>
                    </ul>
                </li>
                <li>
                    <span class="menu-title">Настройки</span>
                    <ul>
                        <li><a href="/adm/services/popups">Попапы и почта</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    @include('back.dom_all_images')
    @include('back.messenger')
    <article class="content">
        @yield('content')
        @yield('messenger')
        @yield('text')


    </article>
</div>
</body>
</html>