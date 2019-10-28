<?php
#форма авторизации
session_start();  #запуск сессии сайта
$login =htmlspecialchars($_POST['login']);
$password =htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);


#поля ввода
$loginINPUT = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$passwordINPUT = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$emailINPUT = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$passwordINPUT = md5($password."pswrdmd5");
#ошибки
$error_login = "";
$error_password = "";
$error_email ="";
$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
$error= false;

#выводим ошибки 
if($login=='' ){
    $error_login = "Недопустимый Логин";
    $error = true;
} 
if($password=='' ){
    $error_password = "Недопустимый пароль";
    $error = true;
} 
if($email=='' || !preg_match('/@/' , $emailINPUT) ){
    $error_email = "Недопустимый Email";
    $error = true;
} 

#записываем в бд
if($error==false){
$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg');
$mysql -> query ("INSERT INTO `users`  (`login` , `password` , `email`) VALUES('$loginINPUT' , '$passwordINPUT' , '$emailINPUT') ");
$mysql -> close();


header("Location: main.php");
}


?>
<!DOCTYPE html>
<head lang=ru>
<meta charset="utf-8">
<link rel="stylesheet" href="css/regstyle.css">
<link rel="stylesheet" href="css/preloader.css">
<title>regestration</title>
<script src="js/script.js"></script>
    </head>
    <body >
    <!--Предзагрузчик с анимацией-->
    <div id="page-preloader" class="preloader">
<div class="loader"></div>
</div>
<div class="maincontainer">
    <div class="card">
        <form class="form" method="POST" action="">
            <input class="form-reg" type="login" name="login" autocomplete="off" placeholder="Логин" value="<?=$_SESSION['login']?>" ><span><?=$error_login?></span>
            <input class="form-reg" type="password" name="password" autocomplete="off" placeholder="Пароль"  value="<?=$_SESSION['password']?>"> <span><?=$error_password?></span> 
            <input class="form-reg" type="email" name="email" autocomplete="off" placeholder="Email" value="<?=$_SESSION['email']?>">  <span><?=$error_email?></span>
            <button id="btn-reg" type="submit" style="font-size: 110%; margin-right: 1%;"><h2 style="color: #ff7e00">	&lt; Зарегист</h2> <h2 style ="color:#9942d7"> ризоваться &gt;</h2></button>
        </form>
    </div>
   
</div>
    </body>
    </html>
