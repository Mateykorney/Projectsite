<?php
    $login = filter_var(trim($_GET['login']),
        FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_GET['password']),
        FILTER_SANITIZE_STRING);

   // $password = md5 ($password."potr0895");

    $mysql = new mysqli('localhost', 'root', '', 'register.bd');
    if ($mysql->connect_errno) {
        echo $mysql->connect_error;
    }
    $result = $mysql -> query ("SELECT * FROM `users` WHERE `login`= '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if  (empty($user)) {
        echo "Пользователь не найден";
        exit ();
    }
    //print_r($user);print_r($user['id']);exit ();
    setcookie('id',$user['id'], time() + 3600,"/");
    setcookie('user',$user['login'], time() + 3600,"/");
    //print_r($_COOKIE['id']);

    $mysql->close();
    header("Location: /");
    exit();
