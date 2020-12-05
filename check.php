<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'youtube');
	$q = mysqli_query($con, "SELECT * FROM users");
	$num = mysqli_num_rows($q);
	for ($i=0; $i < $num; $i++) { 
		# code...
		$str = $q -> fetch_assoc();
		if ($str['name'] == $_POST['name'] && $str['password'] == $_POST['password']) {
			# code...
			header("Location: home.php?id={$str['id']}");
			break;
		}
	}
	if ($i == $num) {
		# code...
		header("Location: index.php?text=Неверный логин и/или пароль");
	}
 ?>