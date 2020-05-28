 
<?php

include("connect.php");
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['address'];
$d=$_POST['gender'];
$f=$_POST['department'];
$g=$_POST['mail'];
$h=$_POST['phone'];
$i=$_POST['handicap'];
$j=$_POST['dob'];
$sql="INSERT INTO project1(firstname,lastname,address,gender,department,mail,mobile,handicap,dob)VALUES('$a','$b','$c','$d','$f','$g','$h','i','j')";
$r=mysqli_query($conn,$sql);
if($r)
{
header("Location:dashboard.php");
}
else
{
	echo "error";
}
mysqli_close($conn);
?>
