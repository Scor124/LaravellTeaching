<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('PageName') страница</title>
    <link href="{{ asset('res/css/main.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('res/css/main.css') }}" rel="stylesheet" type="text/css"> -->
    <script src="public/res/js/anim.js"></script>
</head>
<body >
    <header class="container" >
        <a class="logo" href="/">LOGO</a>
        <nav style="float: right">
            <a id="hr1" class="active" href="/"   >Главная</a>
            <a style="color: white">|</a>
            <a id="hr2" class="active" href="/horny">Хорни</a>
            <a style="color: white">|</a>
        </nav>

    </header>
    <svg viewBox="0 0 @parent 1" height="1" width="100%" style="position: relative;" >
        <line x1="0" x2="100%" stroke="yellow" stroke-width="1" />
    </svg>
    <main>
        <div class="container">
            @yield('main_content')
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
