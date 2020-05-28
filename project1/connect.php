<?php
$host="sql302.epizy.com"; // Host name 
$username="epiz_24238669"; 
$password="61032276P"; 
$db_name="epiz_24238669_phpproject"; 
$conn=mysqli_connect("$host", "$username", "$password","$db_name");
if($conn)
{
	
}
else
{
	echo"failed";
}
?>