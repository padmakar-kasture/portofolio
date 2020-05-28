
<?php
include("connect.php");
$id=$_GET["id"];
$abc="DELETE from project1 where id=$id";
$abcfgjj=mysqli_query($conn,$abc);
if($abcfgjj)
{
	
	echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."<h1>deleted succesfully</h1>";
	echo "<html>
<head>
	<meta http-equiv='refresh' content='1; URL=dis.php'>
</head>
<body>
	<h1>thank you</h1>

</body>
</html>";
}



?>