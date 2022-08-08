<?php 
	session_start();
	require('../model/database.php');
	require('../model/userModel.php');

	if(isset($_REQUEST['submit']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$address=$_POST['address'];
		

		if($password <= 3)
			{
				echo "Password required length greater than 3";
			}
		else if($password!=$cpassword)
		{
			echo "Password Confirm Failed";
		}
		
		else
		{

							if($id != null && $name != null && $gender != null && $dob != null && $email != null && $password != null && $cpassword != null && $address != null)
								{
									
										$status = signup($id, $name,$gender, $dob,$email,$password,$address);
											if($status)
											{
												header('location: ../view/login.html');
											}else{
												header('location: ../view/signup.php');
											}
								}
								else
								{
									echo "Information Missing";
								}
		}
		
	}	
?>
