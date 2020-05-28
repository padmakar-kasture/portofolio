<?php
include("connect.php");
$id=$_GET["id"];
$sql="SELECT * FROM project1 WHERE id=$id ";
$res=mysqli_query($conn,$sql);
while($row=$res->fetch_assoc())
{


echo"

<html>
<head>
	<title>signup form</title>
	<style>
		body{
			color: white;
			background-color: rgba(0,0,0,0.6);
		}


.signup:active{
	transform:translate(5px);
}.signup{
     border-color: red;

		border-radius: 50px;
	height: 30px; 
	width: 150px;
	margin-top: 10px;
background-color: red;
border-bottom-color: red;

}
		.formsection{
			
			margin-left: 35%;
		}
		.field:active{
	border-color: black;
}
*:focus{
	outline: none;
}
		.form{
	
	width: 300px;
	border-radius: 50px;
	background: black;
 
   text-align: center;
   padding: 80px;

	
}
.field:active{
	background-color: black;
}
.field{

	color: white;	 
	background-color: black;
	border-color: black;
	border-bottom-color: green;
    height: 30px;
    width: 200px;
	border-radius: 50px;
	text-align: center;

}

	</style>
</head>
<body>
<section class='formsection'>
	<div class='form'>
	<form action='updatedata.php?id=".$id."' method='post'>
	
		<input type='text' class='field'  value='".$row["firstname"]."'placeholder='FIRSTNAME' name='firstname'> <br><br>
		
		<input type='text' class='field' value='".$row["lastname"]."' placeholder='LASTNAME' name='lastname'><br><br>
	
		<input type='textarea' class='field' value='".$row["address"]."' placeholder='ADDRESS' name='address'><br><br>
		
		<input type='radio' name='gender' checked value='male'> MALE <br>
		<input type='radio' name='gender' value='female'>FEMALE<br>
		<input type='radio' name='gender' value='other'>OTHER <br>
       
        <select class='field' value='".$row["department"]."' name='department' required>
        	<option value='IT'>IT</option>
        	<option value='CSE'>CSE</option>
        	<option value='EXTC'>EXTC</option>
        	<option value='INSTRU'>INSTRU</option>
        </select> <br><br>
     
       <input type='email' value='".$row["mail"]."' placeholder='MAIL' class='field'  name='mail'> <br><br>
         <input type='tel' value='".$row["mobile"]."' placeholder='MOBILE' class='field'  name='phone'> <br><br>
        HANDICAP:
        <br>YES<input type='radio'    name='handicap' value='yes'><br>
        NO <input type='radio'   name='handicap' value='no' checked> <br><br>
     <input type='date' value='".$row["dob"]."' placeholder='enter dob' class='field'  name='dob'> <br><br>
    
    
  <input type='submit' class='signup' name='submit' value='update'>
	</form>
	</div>
</section>
</body>
</html>
";
}


?>