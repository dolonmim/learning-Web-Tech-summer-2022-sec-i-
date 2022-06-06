<html>

<head>
</head>

<body>
<table border="1">
<tr>
<td>
<?php
for ($i = 1; $i < 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "<br>";
}
?>



 </td>

 <td>
<?php

for ($i = 0; $i < 3; $i++) {
    for ($j = 1; $j <= 3-$i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>
 </td>

 
<td>
<?php

$val=chr(65);
for ($i = 1; $i < 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $val;
		$val++;
    }
    echo "<br>";
}
?>
</td>

</tr>




</table>






</body>



</html>