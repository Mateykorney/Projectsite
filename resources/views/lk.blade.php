@extends('layout')
@section('title')
    Личный кабинет @endsection
@section('main_place')
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href=url('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')>
        <link rel="stylesheet" href="../../../site/resources/css/style.css">
    </head>
    <body>
    <div class="container mt-4">
        <?php $id = ($_COOKIE['id']);
        $mysql = mysqli_connect('localhost', 'root', '', 'register.bd');
        if ($mysql->connect_errno) {
            echo $mysql->connect_error;
        }
        $result = mysqli_query ($mysql,"SELECT * FROM `users` WHERE `id`=$id");
        $user = mysqli_fetch_assoc($result);
        $id = ($user['id']);
        $_GET['id'] = $id
        ?>
        <h1>Личный кабинет <?= $_COOKIE['user']?></h1>
        <form action="change" method="get">
            <p> Логин <?php print_r($user['login'])?></p>
            <input type="text" class="form-control" name="login"
                   id="login" value="<?= $user['login'] ?>"><br>
            <p> ФИО  <?php print_r($user['fullname'])?></p>
            <input type="text" class="form-control" name="name"
                   id="name" value="<?= $user['fullname'] ?>"><br>
            <p> Дата рождения  <?php print_r($user['birthday'])?></p>
            <input type="text" class="form-control" name="bday"
                   id="bday" value="<?= $user['birthday'] ?>"><br>
            <p> Номер паспорта  <?php print_r($user['passport'])?></p>
            <input type="text" class="form-control" name="passport"
                   id="passport" value="<?= $user['passport'] ?>"><br>
            <p> Пароль  <?php print_r ($user['password'])?></p>
            <input type="text" class="form-control" name="password"
                   id="password" value="<?= $user['password'] ?>"><br>
            <button class="btn btn-light btn-success" type="submit">Изменить</button>
            <form action="change" method="get">
                <input type="text" class="form-control" name="id"
                       id="id" value="<?= $_GET['id'] ?>"><br>
            </form>
        </form>
    </div>
    </body>
    </html>




@endsection




