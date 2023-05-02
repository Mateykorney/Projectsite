<?php
//  $login = $_GET ['login'];
// echo $login;

$login = filter_var(trim($_GET['login']),
    FILTER_SANITIZE_STRING);
$name = filter_var(trim($_GET['name']),
    FILTER_SANITIZE_STRING);
$bday = filter_var(trim($_GET['bday']),
    FILTER_SANITIZE_STRING);
$passport = filter_var(trim($_GET['passport']),
    FILTER_SANITIZE_STRING);
$password = filter_var(trim($_GET['password']),
    FILTER_SANITIZE_STRING);
if (mb_strlen($login) < 5 || mb_strlen($login) > 10) {
    echo "Недопустимый Логин";
    exit();
} else if (mb_strlen($name) < 10 || mb_strlen($name) > 50) {
    echo "Недопустимое ФИО";
    exit();
} else {
    if (mb_strlen($bday) < 8 || mb_strlen($bday) > 8) {
        echo "Недопустимая дата рождения ДДММГГГГ";
        exit();
    } else if (mb_strlen($passport) < 10 || mb_strlen($passport) > 10) {
        echo "Недопустимый Номер Паспорта";
        exit();
    } else if (mb_strlen($password) < 5 || mb_strlen($password) > 10) {
        echo "Недопустимый Пароль";
        exit();
    }
}
    $password = md5 ($password."potr0895");

    $mysql = new mysqli('localhost', 'root', '', 'register.bd');
    if ($mysql->connect_errno) {
        echo $mysql->connect_error;
    }
    $mysql->query("INSERT INTO `users` (`login`,`fullname`,`birthday`,`passport`,`password`) VALUES('$login','$name','$bday','$passport','$password')");
    $mysql->close();

    header("Location: /");
    exit();

