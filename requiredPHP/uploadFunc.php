<?php
function uploadImage($image){
  $name = $image['image']['name'];
$tmp_name= $image['image']['tmp_name'];
move_uploaded_file($tmp_name , "uploads/".$name);

$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg') ;
$mysql -> query("INSERT INTO `photo` (`name`) VALUES ('$name') ");
$mysql -> close();
}
?>