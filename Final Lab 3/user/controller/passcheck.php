<?php 
	require('../model/database.php');
	session_start();

	if(isset($_REQUEST['submit']))
	{
		
		$email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($email!=null && $password!=null && $cpassword!=null)
        {
        	$conn=getConnection();
        	$result = mysqli_query($conn,"SELECT password FROM users WHERE email='$email'");
				        if(!$result)
				        {
				        echo "<script>alert('Email does not Exist');</script>";
				        //header('location: ../views/ResetPass.php');
				        }
				        else
				        {
				        	if($pass==$cpass)
				        	{
				        		$sql=mysqli_query($conn,"UPDATE users SET password='$password' where Email='$email'");
							        	if($sql)
									        {
									        echo "<script>alert('Password have been Changed');</script>";
									        header('location: ../view/login.html');
									        }

				        	}
				        	else
				        	{
				        	
							 echo "<script>alert('Password do not Match');</script>";
							// header('location: ../views/ResetPass.php');
				        	}
				        
        				}
	       
		}
		 else
	        {
	        	echo "<script>alert('Information Missing');</script>";
	        	//header('location: ../views/ResetPass.php');
	        }
	 }
       	
?>