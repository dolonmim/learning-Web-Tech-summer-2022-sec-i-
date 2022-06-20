<?php 

	$ID = $_REQUEST['ID'];
	$password = $_REQUEST['password'];
	$Confirm_password = $_REQUEST['Confirm_password'];
	$Name = $_REQUEST['username'];
	$User_Type = $_REQUEST['User_Type'];


	if ($ID == null || $password == null || $Confirm_password == null || $Name == null || $User_Type == null) {
		print_r($ID);
		print_r($password);
		print_r($Confirm_password);
		print_r($Name);
		print_r($User_Type);
		echo "invalid username/password/email <br>";
	}else{
		$data = $ID."|".$password."|".$Name."|".$User_Type."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: signup.html');	
			}else{
				header('location: login.html');
			}
	}



?>
