<?php 
 $host ='FallingDown';
 $user = 'root';
 $pass = '';
 $db = 'users';

 $link = mysqli_connect($host, $user, $pass, $db);
 if (!$link)
 {
    die('Ошибка соединения'. mysqli_connect_error());
 }
 else {
 echo 'Успешно соединились'.'<br>';
 }

//  mysqli_close($link);
?>