<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	mysqli_query($con, "DELETE videos, users FROM videos INNER JOIN users ON videos.user_id = users.id WHERE user_id = {$_GET['id']}");
	header("Location: index.php");
 ?>