<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{{ $title or 'Панель управления Центр Промышленного Альпинизма' }}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/Admin/js/jquery-1.8.3.js"></script>

    @include('back/scripts')
    @yield('scripts')
</head>
<body>
<header class="header">
    <div class="header-button">
        <p>Центр Промышленного Альпинизма CPA</p>
    </div>
    <div class="header-button">
        <a href="/auth/logout" class="logout">Выход</a>
    </div>
</header>
<div class="main-content">
    <aside class="left-side-bar">
        <nav class="main-menu">
            <ul class="menu">
                <li class="menu-level-1">
                    <span class="menu-name">Страницы <i class="triangle">▲</i> </span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="/adm/edit/about">Компания</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/study">Учебный центр</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/safety">Техника безопасности</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/all">Общее</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/clients">Клиенты</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/news">Новости</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/contacts">Контакты</a></li>
                    </ul>
                </li>
                <li class="menu-level-1">
                    <span class="menu-name">Специальные блоки <i class="triangle">▲</i></span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="/adm/edit/service">Услуги</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/facts">Факты</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/slider">Слайдер</a></li>
                    </ul>
                </li>
                <li class="menu-level-1">
                    <span class="menu-name">Настройки <i class="triangle">▲</i></span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="#">text 1 </a></li>
                    </ul>
                </li>
                <li class="menu-level-1"><span class="menu-end"></span></li>
            </ul>
        </nav>
    </aside>
    <article class="content">
        @yield('content')
        @yield('messenger')
        @yield('text')
    </article>
    <aside class="right-side-bar">
        <div class="control-panel">
            <div class="title">
                Управление
            </div>
            <div class="row">
                <label>Состояние</label>
                <select>
                    <option value="1" selected>Text</option>
                    <option value="1"> text-2</option>
                    <option value="1"></option>
                    <option value="1"></option>
                </select>
            </div>
            <div class="row">
                <label>Позиция</label>
                <input type="text" value="2">
            </div>
            <div class="row">
                <label>Дата редактирования</label>
                <p class="text">05.05.14</p>
            </div>
            <div class="row">
                <label>Дополнительно</label>
                <div class="buttons-block">
                    <button class="info">
                        info
                    </button>
                    <button class="smm">
                        smm
                    </button>
                    <button class="preview">
                        preview
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="buttons-block two">
                    <button class="save_all">Сохранить</button>
                    <div class="progress-bar">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
</body>
</html>