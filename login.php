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

if (!empty($_POST['pass']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    
    $query = "SELECT * FROM users WHERE login='$login' AND pass='$pass'";
    $res = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($res);
    
    if (!empty($user)) {
        // прошел авторизацию
        header('Location: user.php');
    } else {
        // неверно ввел логин или пароль
        echo "ты олух";
    }
}

?>

<form action="" method="POST">
<input name="login" value="">
<input name="pass" value="" type="password">
<input type="submit">
</form>    

</body>
</html>