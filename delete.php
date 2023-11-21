<?php
include ("db.php");

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id='$id'"; 
mysqli_query($link, $query) or die(mysqli_error($link)) 
?>