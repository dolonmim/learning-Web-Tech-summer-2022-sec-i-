<?php 
	session_start();
	require('../model/database.php');
	require('../model/userModel.php');

	$Id=$_SESSION["id"];
      echo "The id is  ".$Id;

	  $conn=getConnection();
	  $query=delete($Id);



	?>




