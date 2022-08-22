<?php 

session_start();
require('../model/database.php');
require('../model/userModel.php');

if(isset($_REQUEST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];


	if ($id == null || $name == null || $email == null || $password == null || $address == null) {
		echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=../view/bus.php> BACK </a></div>";
		return ;
	}else{
        $user['ID']=$id;
		$user['Name']=$name;
		$user['Email']=$email;
        $user['Password']=$password;
		$user['Address']=$address;
       

		updateuser($user);
		header('location:../view/login.html');
		
		
	
	}
}
    
  
  echo "<h1 align= center > UPDATE SUCCESSFULLY <h1> <br>";
?>


