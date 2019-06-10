<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/main.css">
    <script type="text/javascript" src="/js/main.js"></script>

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa fa-cross"></i>Диплом</a>
            <a href="/" target="_blank" class="my-link">Форма</a>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
