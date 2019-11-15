<?php
mysql_connect('localhost' , 'mysql' , 'mysql');
mysql_select_db('reg');
$res =  mysql_query("SELECT `login` , `email` , `avatar` FROM `users`  ");

mysql_free_result($res);

echo "<div class='profile'>
<p>".$_COOKIE['user']."</p>
<img src='".$_COOKIE['img']."'></br>
<a href='chooseAv.php'>Сменить аватар</a>
</div>
";
?>