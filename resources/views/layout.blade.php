<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark text-white border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-white">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Очумелые ручки</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">Про нас</a></li>
                <li class="nav-item"><a href="/regi" class="nav-link">Регистрация</a></li>
                <li class="nav-item"><a href="/chk" class="nav-link">ЧЕК</a></li>
                <li class="nav-item"><a href="/autho" class="nav-link active" aria-current="page">Войти</a></li>
            </ul>
        </header>
    </div>
 <div class="container">
     @yield('main_place')
 </div>

</body>
</html>
