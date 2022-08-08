<!DOCTYPE html>
<html>
	<body>
		<h2>SignUp</h2>
       <form action="../controller/aregcheck.php" method="POST">
        
		<fieldset>
                <legend>Sign Up</legend>
                <table>
                <tr>
                        
                        <td><b>Employeer name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Employeer name" value=""></td>
                    </tr>
                
                        <td><b>company name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="companyname" placeholder="company name" value=""></td>
                    </tr>
                    
                    <tr>
                        <td><b>contact no</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="contactno" placeholder="contact no" value=""></td>
                    </tr>
                    <tr>
                        <td><b>username</b></td>
                </tr>
                <tr>
                        <td><input type="text" name="name" placeholder="username" value=""></td>
                    </tr>
                    
                    <tr>
                        <td><b>Password</b></td>
                        </tr>
                        <tr>
                        <td><input type="password" name="password" placeholder="Enter password" value=""></td>
                    </tr>
                    <tr>
                        <td><b>Confirm Password</b></td>
                        </tr>
                        
                       
                    
                    
                    
                    <tr>
                        <td><input type="submit" name="submit" value=" sign Up"></td> 
                        <td> <a href="../view/alogin.php"> Sign In </a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>
