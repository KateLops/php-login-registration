<?php
    include ("db.php");

	$id = $_GET['id'];
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$mail = $_POST['mail'];

    $query = "UPDATE users SET
		login='$login', pass='$pass', mail='$mail'
	WHERE id=$id";

    mysqli_query($link, $query) or die(mysqli_error($link));
    echo 'юзер успешно изменен!';
?>