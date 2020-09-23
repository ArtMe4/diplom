<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @yield('styles')
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/layout.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Общественный совет </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Главная</a>
            <a class="p-2 text-dark" href="/articles/form">Написать обращение</a>
            <a class="p-2 text-dark" href="#">Контакты</a>
        </nav>
    </div>
</header>
    <main class="py-4">
        <div class="title border-bottom shadow-sm">
            Общественный совет при Министерстве природных ресурсов и экологии Омской области
        </div>
        <div class="all d-flex justify-content-between align-items-start">
            <div class="left container">
                <a href="/articles/about">Об общественном совете</a>
                <ul>
                    <li>
                        <a href="/articles/struct">Структура</a>
                    </li>
                    <li>
                        <a href="/articles/people">Члены совета</a>
                    </li>
                    <li>
                        <a href="/articles/deyat">Деятельность</a>
                    </li>
                </ul>
            </div>
            <div class="center">
                @include('blocks.messages')
                @yield('content')
            </div>
            <div class="right container">
                <a href="/articles/palaty">Общественные палаты РФ</a>
                <a href="/articles/sovety">Общественные советы</a>
                <a href="/articles/komiss">Общественная наблюдательная комиссия</a>
                <a href="/articles/form">Написать обращение</a>
            </div>
        </div>
    </main>
</body>
</html>
