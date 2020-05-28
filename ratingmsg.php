<?php
include("connectrating.php");
$mail=$_POST["mail"];
$feed=$_POST["feedback"];
$rating=$_POST["rating"];
$query="INSERT INTO table1(email,feedback,rating)VALUES('$mail','$feed','$rating')";
$sql=mysqli_query($connect,$query);
if($sql){
	echo "
    <html>
<head>
	<meta http-equiv='Refresh' content='2; url=http://padmakar.ga'>
</head>
<body>
	<h1>thank you</h1>

</body>
</html>
    ";
}


?>