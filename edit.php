<?php
include ("db.php");


$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);


?>
<form action="save.php?id=<?= $_GET['id'] ?>" method="POST">    
	<input name="login" value="<?= $user['login'] ?>">
	<input name="pass" value="<?= $user['pass'] ?>">
	<input name="mail" value="<?= $user['mail'] ?>">
	<input type="submit">
<input type="submit">
</form> 
