
<!DOCTYPE html>
<html>
<head>
	

	<title>Email Check</title>
</head>
<body>
	<div class="container">
		<form action="../view/login.html" method="POST" class="">
			<?php
			if($errors>0)
			{
				foreach($errors AS $displayErrors){ ?>
				
				<div id="alert"><?php echo $displayErrors; ?> </div>
				<?php
			}
			}
			?>
			
				<input type="email" placeholder="Email" name="email" value="" required>
			
			
				<div><input type="submit" name="submit" value="CheckS"></div>
            
			
		</form>
		</div>
	
</body>
</html>