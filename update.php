<?php
$errors = array();
$name = $_FILES['avatar']['name'];//имя файла
$tmp_name= $_FILES['avatar']['tmp_name']; //имя директории 
$file_type = $_FILES['avatar']['type'];//определяем тип файла
$file_size = $_FILES['avatar']['size'];//размер фото
$file_ext = strtolower(end(explode('.' , $_FILES['image'] ['name'] )));
$expensions = array('jpg', 'png', 'jpeg');//форматы фото 
    if($file_size > 2097152){
      $errors[] = 'Файл Больше 2Мб';
    }

       if( empty($errors) == true )
  {
  move_uploaded_file($tmp_name , "media/".$name);
  //заносим данные о фото в базу данных photo
$mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg') ;
$mysql -> query("UPDATE `users` SET `avatar` = 'media/$name' ");
$mysql -> close();
header('Location: /');
} 
else
{
  print "error";
}


?>
?>