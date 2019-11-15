<?php
mysql_connect('localhost' , 'mysql' , 'mysql');
mysql_select_db('reg');
$res =  mysql_query("SELECT `image` , `comment` , `datetime` , `username` FROM photo LIMIT 0,50");

while($row = mysql_fetch_array($res,  MYSQL_ASSOC) )
{
    echo "<div class='photo-inner'>
    <p class='font-weight-bold'>".$row['username']."</p>
<img src=".$row['image'].">
<p class='font-weight-bold'>".$row['comment']."</p>
<p class='text-sm-right'>".$row['datetime']."</p>
</div>";
}

mysql_free_result($res);

?>