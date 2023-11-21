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

<?php

if (!empty($_POST)) {
    $login = $_POST['login'];
	$pass = $_POST['pass'];
	$mail = $_POST['mail']; 
    
    $query = "INSERT INTO users SET login='$login', pass='$pass', mail='$mail'";
    mysqli_query($link, $query) or die(mysqli_error($link)); 
    unset($_POST['login'], $_POST['pass'], $_POST['mail']);
    echo 'Вы успешно зарегестрировались';
    header('Location: index.php');
}


?>

<form action="" method="POST">
<input name="login" value="" placeholder="Введите имя пользователя"> <br>
<input name="pass" value=""  placeholder="Введите пароль"> <br>
<input name="mail" value=""  placeholder="Введите почту"> <br>
<input type="submit">
</form>    

</body>
</html>