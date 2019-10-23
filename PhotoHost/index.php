<?php
#форма авторизации
session_start();
setcookie('user' , $user['name'] , time() + 3600*24 ,"/");
$login =htmlspecialchars($_POST['login']);
$password =htmlspecialchars($_POST['password']);

#ошибки
    $error_login = "";
    $error_password = "";

$_SESSION['login'] = $login;
$_SESSION['password'] = $password;

    #ищем не полные поля
    if($login == '' ){
        $error_login = 'не введён логин';
    } else {
        session_unset();
    }
    if($password == '' ){
        $error_password = 'не введён пароль';
    } else {
        session_unset();
    }


$loginINPUT = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$passwordINPUT = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg');
$result = $mysql -> query ("SELECT * FROM `users` WHERE `login` = '$loginINPUT' AND `password` = '$passwordINPUT' ");
$user = $result -> fetch_assoc();

if(count($user) != 0){
 echo "welcome"; 
} else{
    $error_login = 'Неверный логин';
    $error_password = 'Неверный пароль';
}



$mysql -> close();


?>
<!DOCTYPE html>
<head lang=ru>
<meta charset="utf-8">
<link rel="stylesheet" href="css/regstyle.css">
<script src="js/script.js"></script>
    </head>
    <body >
<div class="maincontainer">
    <div class="card">
        <form class="form" method="POST" action="">
            <input class="form-auth" type="login" name="login" autocomplete="off" placeholder="Логин" value="<?=$_SESSION['login']?>" ><span class="error"><?=$error_login?></span>
            <input class="form-auth" type="password" name="password" autocomplete="off" placeholder="Пароль" value="<?=$_SESSION['password']?>"><span class="error"><?=$error_password?></span>
            <button type="submit"><h2 style="color: #ff7e00">	&lt; Авто </h2> <h2 style ="color:#9942d7"> ризоваться &gt;</h2></button>
        </form>
    </div>
    <div class="regestration">
       <div class="text"> <div class="square" style="width:15px;height:15px;background-color:#ff7e00;"> </div>
       <h2>Ещё нет аккаунта?</h2>
    </div>
        <a href="reg.php" style ="color:#9942d7; font-size:180%; font-family: Arial, Helvetica, sans-serif;">Зарегистрироваться</a>
        </div>
</div>
    </body>
    </html>