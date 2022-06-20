<?php 
	session_start();

	$ID = $_REQUEST['ID'];
	$password = $_REQUEST['password'];
	


	if ($ID== null || $password == null ) {
		echo "invalid username/password <br>";
	}else{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) {
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($ID == trim($user[0]) && $password == trim($user[1])){
					setcookie('status', 'true', time()+3600, '/');
					if($User_Type=="Admin")
					{
						
					header('location: admin.html');
					}
				else header('location: user.html');
				}
				
				
		}
		echo "invalid user!";
	}



?>