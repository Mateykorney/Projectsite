<?php
$id = filter_var(trim($_GET['id']),
    FILTER_SANITIZE_STRING);
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

$id = $_GET['id'];
$login = $_GET['login'];
$name = $_GET['name'];
$bday = $_GET['bday'];
$passport = $_GET['passport'];
$password = $_GET['password'];
print_r($login);
$query = "UPDATE `users` SET `login`='$login',`fullname`='$name', `birthday`='$bday', `passport`='$passport',`passport`='$passport'
	WHERE `id`=$id";

mysqli_query (mysqli_connect('localhost', 'root', '', 'register.bd'),$query);
print_r($login);

setcookie('user',$login, time() + 3600,"/");
header("Location: /");
exit();

