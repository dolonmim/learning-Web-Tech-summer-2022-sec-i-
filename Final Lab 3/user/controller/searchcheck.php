<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>email</th>

<th>name</th>

<th>How may days</th>

<th>Package</th>

<th>Amount</th>



</tr>


<?php


require_once('../model/userModel.php');
$SEARCH = $_REQUEST['SEARCH'];

if ($SEARCH == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
    return ;
}else{
    $user['SEARCH']=$SEARCH;
   
    require_once('../model/userModel.php');
    $result=search($user);
    if(mysqli_num_rows($result) > 0){
   while ($row = mysqli_fetch_array($result)) {
       echo "<tr>";
       echo "<td>" . $row['email'] . "</td>";
       echo "<td>" . $row['name'] . "</td>";
       echo "<td>" . $row['h_m_day'] . "</td>";
       echo "<td>" . $row['package'] . "</td>";
       echo "<td>" . $row['amount'] . "</td>";
      
       echo "</tr>";
       
   
   }
   mysqli_free_result($result);
    }

    search($user);
    

}
echo"<br>";


?>
</table>