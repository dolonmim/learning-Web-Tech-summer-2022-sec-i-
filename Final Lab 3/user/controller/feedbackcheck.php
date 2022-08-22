<?php 
	session_start();
	require('../model/database.php');
	require('../model/userModel.php');

	if(isset($_REQUEST['submit']))
	{
		$feedback=$_POST['feedback'];
		

		

							if($feedback != null  )
								{
									
										$status = feedback($feedback);
											if($status)
											{
												header('location: ../view/loginview.php');
											}else
											{
												header('location: ../view/feedback.html');
											}
								}
								
		}
	
	
?>