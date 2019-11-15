
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
        <form class="form" method="POST" action="check.php">
            <input class="form-reg" type="login" name="login" autocomplete="off" placeholder="Логин" value="<?=$_SESSION['login']?>" ><span><?=$error_login?></span>
            <input class="form-reg" type="password" name="password" autocomplete="off" placeholder="Пароль"  value="<?=$_SESSION['password']?>"> <span><?=$error_password?></span> 
            <input class="form-reg" type="email" name="email" autocomplete="off" placeholder="Email" value="<?=$_SESSION['email']?>">  <span><?=$error_email?></span>
            <button id="btn-reg" type="submit" style="font-size: 110%; margin-right: 1%;"><h2 style="color: #ff7e00">	&lt; Зарегист</h2> <h2 style ="color:#9942d7"> ризоваться &gt;</h2></button>
        </form>
    </div>
   
</div>
    </body>
    </html>