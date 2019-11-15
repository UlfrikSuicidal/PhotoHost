<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = md5($password."pswrdmd5");

$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg');
$mysql -> query ("INSERT INTO `users`  (`login` , `password` , `email` , `avatar`)  VALUES('$login' , '$password' , '$email' , 'media/default.jpg') ");
$mysql -> close();

header("Location: /");

exit();

?>