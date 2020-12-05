<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	mysqli_query($con, "UPDATE users SET name = '{$_GET['name']}' WHERE id = {$_GET['id']}");
	mysqli_query($con, "UPDATE users SET phone = '{$_GET['phone']}' WHERE id = {$_GET['id']}");
	mysqli_query($con, "UPDATE users SET email = '{$_GET['email']}' WHERE id = {$_GET['id']}");
	header("Location: account.php?id={$_GET['id']}");
 ?>