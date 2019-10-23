<?php

$loginINPUT = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$passwordINPUT = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$emailINPUT = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg');
$mysql -> query ("INSERT INTO `users`  (`login` , `password` , `email`) VALUES('$loginINPUT' , '$passwordINPUT' , '$emailINPUT') ");
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
            <input class="form-reg" type="login" name="login" autocomplete="off" placeholder="Логин" value="<?=$_SESSION['login']?>" >
            <input class="form-reg" type="password" name="password" autocomplete="off" placeholder="Пароль"  value="<?=$_SESSION['password']?>">  
            <input class="form-reg" type="email" name="email" autocomplete="off" placeholder="Email" value="<?=$_SESSION['email']?>">  
            <button id="btn-reg" type="submit" style="font-size: 110%; margin-right: 1%;"><h2 style="color: #ff7e00">	&lt; Зарегист</h2> <h2 style ="color:#9942d7"> ризоваться &gt;</h2></button>
        </form>
    </div>
   
</div>
    </body>
    </html>