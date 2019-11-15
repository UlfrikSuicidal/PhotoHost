<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$password = md5($password."pswrdmd5");
$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg');
$result = $mysql -> query ("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
$user = $result -> fetch_assoc();

if(count($user) == 0)
{
    echo "Такой пользователь не найден";
    exit();
}
else{
 setcookie('user' , $user['login'] , time() + 3600 ,"/");
 setcookie('img' , $user['avatar'] , time() + 3600 ,"/");
 setcookie('photos' , $user['avatar'] , time() + 3600 ,"/");
}
    

$mysql -> close();  
header('Location: /');  
exit();
?>