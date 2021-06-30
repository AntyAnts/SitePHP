<?php

	$email = $_POST['email'];
	$username = $_POST['name'];
	$password = md5($_POST['pass']);
	$mysql = new mysqli('localhost','root','','users');
	if(!$mysql){
		echo 'OK';
		die('Could not connect to server');
	}
	else{
		$req_name = $mysql->query("SELECT `username` FROM `users` WHERE `username` = '$username'");
		$req_email = $mysql->query("SELECT `email` FROM `users` WHERE `email` = '$email'");
		if(mysqli_num_rows($req_name) == 0 or mysqli_num_rows($req_email) == 0){
			$mysql->query("INSERT INTO `users`(`username`,`email`,`password`) VALUES('$username','$email','$password')");
			
			header('Location: /');
		}else{
			echo 'User already exists';
		}
			
	}
		

?>