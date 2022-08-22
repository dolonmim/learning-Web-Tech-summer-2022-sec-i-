<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
	<body>
		<h2></h2>
		<div class="signup">
		<div class="navigation">

			 <div class="back">
				<ul>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="login.html">BACK</a></li>
				</ul>
			 </div>
			</div>
       <form onsubmit="return validate()" action="../controller/paymentcheck.php"  enctype="multipart/form-data"  method="POST">
        
		
			
                
       <center><table>
                <tr>
                        
                        <td><b>Email</b> </td>
                        </tr>
                        <tr>
                        <td><input type="email" name="email" placeholder="Enter your Email" value="" id="email"></td>
                    </tr>


                    <tr>
                    <td><b>Choose</b> </td></tr>
                    <tr><td>
                        <select class="form-control" onchange="myfun(this.value)">
                    <option>Division</option>
                     <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Sylhet</option>
                    </select>
                    </td>
                  

                    </tr>




                    <tr>
                    <td><b>Choose</b> </td></tr>
                    <tr><td><select class="form-control" id="city">
                  
                    <option>select city</option>
                        
                    </select>
                    </td>
                  

                    </tr>



                
                        <td><b>Name</b> </td>
                        </tr>
                        <tr>
                        <td><input type="text" name="name" placeholder="Enter your destination" value="" id="name"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Days</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="h_m_day" placeholder="How long will you stay" value="" id="h_m_day"></td>
                    </tr>
                    <tr>
                        <td><b>Package</b></td>
                        </tr>
                        <tr>
                        <td><input type="text" name="package" placeholder="package" value="" id="package"></td>
                    </tr>
                    <tr>
                        <td><b>Amount</b></td></tr>
                        <tr>
                        <td >
                        <input type="text" name="amount" placeholder="Amount" value="" id="amount"  >
                        </td>
                    </tr>
                    

                    <tr>
                        <td><b>Amount</b></td></tr>
                        <tr>
                        <td >
                        <input type="text" name="amount" placeholder="Amount" value="" id="amount"  >
                        </td>
                    </tr>


                     
                    <tr>
                        <td><b>NID</b></td></tr>
                        <tr>
                        <td >
                        <input type="file" placeholder="" value="" id="file" multiple >
                        
                        </td>
                        </tr>
                        <tr>
                        
                        </td>
                    </tr>
                    
                         
                    
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
					<tr>
						
                        <td>
							<div class="signupbtn">
								<input type="submit" name="submit" value=" BOOK"></div>
								
                        
                    </tr>






                     <script >
                        function myfun(data)
                        {
                            
                        alert(data);

                        



                        const req = new XMLHttpRequest();
                        req.open('GET','http://localhost/user/view/response.php?selectvalue='+data,'true');
                        req.send();

                        req.onreadystatechange=function()
                        {
                          if(req.readyState==4 && req.status==200)
                          {
                            document.getElementById('city').innerHTML =req.responseText;
                          }
                        }

                        }




                        //file upload
                        const file = document.getElementById("file");
                        const submit = document.getElementById("submit");

                        btnUpload.addEventListener("click",function()
                        {
                           const xhr = new XMLHttpRequest();
                           const formData = new FormData();

                          for (const file of file.files)
                           {
                            formData.append("myFiles[]",file);
                           }

                           xhr.open("post","upload.php");
                           xhr.send(formData);

                        });
                      </script>




                    
                      </table>
</center>
           
        </form>
	
		</div>
              
</body>
</html>