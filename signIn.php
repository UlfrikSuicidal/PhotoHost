
<!DOCTYPE html>
<head lang=ru>
<meta charset="utf-8">
<link rel="stylesheet" href="css/regstyle.css">
<link rel="stylesheet" href="css/preloader.css">
<script src="js/script.js"></script>
 </head>
    <body >
    <div id="page-preloader" class="preloader">
<div class="loader"></div>
</div>
<div class="maincontainer">
    <div class="card">
        <form class="form" method="POST" action="auth.php">
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