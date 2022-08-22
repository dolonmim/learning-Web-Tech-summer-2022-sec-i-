<html>
	<head>
		<title>Reset Pass</title>
		
	</head>
	<body>
		
		
		<form method="POST" name="ResetPass" action="../controller/passcheck.php" onsubmit="return validatePassword()">
			<center>
				<fieldset >
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Password Reset</b></legend>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Email</b></td>
							<td width="50%"><input type="email" name="email" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>New Password</b></td>
							<td><input type="password" name="password" value=""></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Confrim Password</b></td>
							<td><input type="password" name="cpassword" value=""></td>
						</tr>
						<tr>
							<td colspan="2" align="center" height="50px" >
								<input type="submit" name="submit" value="Submit" style="background:mediumseagreen;font-size: 20;color: white;margin: 20%;">
							</td>
						</tr>
					</table>
				</fieldset>
			</center>
		</form>
	</body>
</html>