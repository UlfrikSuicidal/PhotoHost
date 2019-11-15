<?php
setcookie('user' , $user['login'] , time() - 360000 ,"/");
header("Location: /");
?>