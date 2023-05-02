@extends('layout')
@section('title')
    Авторизация @endsection
    @section('main_place')
        <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href=url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')>
    </head>
    <body>
    <div class="container mt-4">
        <h1>Вход</h1>
        <form action="auth.blade.php" method="get">
            <input type="text" class="form-control" name="login"
                   id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="password"
                   id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-light btn-success" type="submit">Авторизоваться</button>
        </form>
    </div>
    </body>
    </html>
@endsection
