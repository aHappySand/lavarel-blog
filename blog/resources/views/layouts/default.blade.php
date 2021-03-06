<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Sample')- Laravel 学习</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layouts._header')
        <div class="container">
            <div class="offset-md-1 col-md-10">
                @include('shared._message')
                @yield('content')
                @include('layouts._footer')
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
