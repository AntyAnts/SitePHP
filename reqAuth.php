<?php
	$email = $_POST['email'];
	$password = md5($_POST['pass']);
	
	if($_POST){
		$mysql = new mysqli('localhost','root','','users');
		if(!$mysql){
			die('Could not connect to server');
		}
		else{
			$res = $mysql->query("SELECT `email` FROM `users` WHERE `email` = '$email'");
			if(mysqli_num_rows($res)<>0){
				$pass = $mysql->query("SELECT `password` FROM `users` WHERE `email` = '$email'");
				$pass_res = $pass->fetch_assoc()['password'];
				if(mysqli_num_rows($pass) == 0){
					print_r($pass);
					die('empty password');
				}
				else{
					if($pass_res == $password){
					$name = $mysql->query("SELECT `username` FROM `users` WHERE `password` = '$password'");
					echo "Welcome back" ." ". $name->fetch_assoc()['username'];
				}else{
					header("location: index.php");
					die('Wrong password');
				}
				}
			}else{
				header("Location: /");
				die('No such user');

			}
		}
	}
?>