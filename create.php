<?php
  $errors = array();
  $name = $_FILES['image']['name'];//имя файла
  $tmp_name= $_FILES['image']['tmp_name']; //имя директории 
  $comment= filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING); //имя директории 
  $file_type = $_FILES['image']['type'];//определяем тип файла
  $time = date("D , h");//время заливки фото
  $file_size = $_FILES['image']['size'];//размер фото
  $file_ext = strtolower(end(explode('.' , $_FILES['image'] ['name'] )));
  $expensions = array('jpg', 'png', 'jpeg');//форматы фото 
  $username = $_COOKIE['user'];
      if($file_size > 2097152){
        $errors[] = 'Файл Больше 2Мб';
      }

         if( empty($errors)== true )
    {
    move_uploaded_file($tmp_name , "uploads/".$name);
    //заносим данные о фото в базу данных photo
  $mysql = new mysqli('localhost' , 'mysql' , 'mysql' , 'reg') ;
  $mysql -> query("INSERT INTO `photo` (`name` , `datetime` , `image` , `comment` , `username`) VALUES ('$name' , '$time' , 'uploads/$name' , '$comment' , '$username' ) ");
  $mysql -> close();
  header('Location: /');
  } 
  else
  {
    print "error";
  }


?>