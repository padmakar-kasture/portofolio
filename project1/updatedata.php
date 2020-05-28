<?php
include("connect.php");
$id=$_GET["id"];
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['address'];
$d=$_POST['gender'];
$f=$_POST['department'];
$g=$_POST['mail'];
$h=$_POST['phone'];
$i=$_POST['handicap'];
$j=$_POST['dob'];

$sql="UPDATE project1 SET firstname='$a',lastname='$b',address='$c',gender='$d',department='$f',mail='$g',mobile='$h',handicap='$i',dob='$j' WHERE id=$id";
$res1=mysqli_query($conn,$sql);
if($res1==true){
	echo "<html>
<head>
	<meta http-equiv='refresh' content='1; URL=dis.php'>
</head>
<body>
	<h1>thank you</h1>

</body>
</html>

	";
	
}
?>
