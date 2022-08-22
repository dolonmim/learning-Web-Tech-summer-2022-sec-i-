<?php 
session_start();
	
	require('../model/database.php');
	require('../model/userModel.php');
	$ID="";
	
	    $name="";
		$gender="";
		$dob="";
		$email="";
		$password="";
		$address="";
		$male="";
		$female="";
		$others="";



	  $conn=getConnection();
	  $id=$_SESSION['id'];
	  $query=mysqli_query($conn, "Select * from users where ID Like '".$id."'");
	  //$row=mysqli_fetch_array($query);
	  if (mysqli_num_rows($query)> 0)

    {

       while($row = $query->fetch_assoc())

       {

   

       $ID=$row["ID"];
	   $name=$row['Name'];
		$dob=$row['DOB'];
		$email=$row['Email'];
		$password=$row['Password'];
		$address=$row['Address'];
		$gender=$row['Gender'];

		if($gender=="Male")
		{
			$male="Checked";
		}
		else if($gender=="Female")
		{
			$female="Checked";
		}
		else if($gender=="Others")
		{
			$others="Checked";
		}
}

 }
?>



<html>
<head>
        <title>View Page</title>
        
</head>

	<body>
		
		 	
    <form method="POST" name="" action="../controller/updateuser.php" onsubmit="return validatePassword()">
			
				<fieldset >
				<legend  ><b>Profile</b></legend>
					<table align="center" width="80%">
						
						<tr>
							<td ><b>ID</b></td>

							<td width="50%"><input type="text" name="id" value=" <?php echo $ID;?> "></td>
										
						</tr>
						
						<tr>
							<td ><b>Name</b></td>
										
							<td width="50%">
								<input type="text" name="name" value="<?php echo $name; ?>">
							</td>
						</tr>
						
							
						<tr>
							<td ><b>Email</b></td>
										
							<td width="50%"><input type="email" name="email" value="<?php echo $email;?>"></td>
											
						</tr>
						
						<tr>
							<td ><b>Password</b></td>
										
							<td><input type="password" name="password" value="<?php echo $password;?>"></td>
											
						</tr>
						<tr>
							<td ><b>Address</b></td>
										
							<td> <input type="text" name="address" value="<?php echo $address;?>"></td>
											
						</tr>

                        <tr>
							<td colspan="2" align="center" height="50px" >
								<input type="submit" name="submit" value="Submit" style="background:mediumseagreen;font-size: 20;color: white;margin: 20%;">
							</td>
						</tr>
						<tr>
										<td colspan="2" align="center">
										<td> <a href="../view/loginview.php"> Back </a></td>
								</tr>

						
				</fieldset>
			
		</form>
	</body>
</html>
