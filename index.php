<?php  
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">войти</a> 
    <a href="registration.php">зарегистрироватся</a> 

<?php

if (!empty($_POST)) {
    $login = $_POST['login'];
	$pass = $_POST['pass'];
	$mail = $_POST['mail']; 
    
    $query = "INSERT INTO users SET login='$login', pass='$pass', mail='$mail'";
    mysqli_query($link, $query) or die(mysqli_error($link)); 
    unset($_POST['login'], $_POST['pass'], $_POST['mail']);
}

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {

    echo '<br>'.'Пользователь: '.$row['login'].'<br>';
    echo 'пароль: '.$row['pass'].'<br>';
    echo 'почта: '.$row['mail'].'<br>';   
}
$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<ul>';
	   echo '<li>user'.$row['id'].' <a href="edit.php?id='.$row['id'].'">edit</a> <a href="delete.php?id='.$row['id'].'">delete</a></li>';
    echo '</ul>';
}
?>

<form action="" method="POST">
<input name="login" value="">
<input name="pass" value="">
<input name="mail" value="">
<input type="submit">
</form>    

</body>
</html>