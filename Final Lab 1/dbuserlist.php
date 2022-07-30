<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
		
		<br>
		<table border="1">
			<tr>
				<th>Username</th>
				<th>ID</th>
				<th>PASSWORD</th>
				
			</tr>

			<?php 
				 $conn = mysqli_connect('localhost', 'root', '', 'info');

    

    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    
    while($row= mysqli_fetch_assoc($result)){
        
    
			?>
			<tr>
				<td><?php  echo $row['username']; ?> </td>
                <td><?php  echo $row['ID']; ?> </td>
                <td><?php  echo $row['Password']; ?> </td>
				
				
			</tr>
			<?php
					
	           }
			?>
		</table>
</body>
</html>