<?php 
	session_start();
	require_once('../model/userModel.php');

	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	if ($email == null || $password == null) {
		echo "invalid email/password <br>";
	}
	
    else{

		$status = login($email, $password);
		if (mysqli_num_rows($status)> 0)

    {

       while($row = $status->fetch_assoc())

       {
        setcookie('status', 'true', time()+3600, '/');
		$_SESSION["id"]=$row["ID"];
		header('location: ../view/loginview.php');

       }

    }
		
	}
?>