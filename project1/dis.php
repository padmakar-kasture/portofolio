<?php
session_start();

include("connect.php");
if($_SESSION["user"]==true){
$sql1="select * from project1";
echo "<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
      <link href='https://fonts.googleapis.com/css?family=Cinzel&display=swap' rel='stylesheet'>
	<style type='text/css'>
		body{
			width=100%;
            font-family: 'Cinzel', serif;
			
			}

		.spanwala{

			color: coral;
			
			font-size:40px;
		}
		.container{
			overflow: hidden;
		}
		#top{
			margin:none;
			color: white;
			text-align: center;
			background-color: black;

		}
		#navbar{
			background-color: rgba(0,0,0,0.4);
		}
		ul{
			
		}
		li{

			padding: 30px;
			display: inline;
		}
		#delete{
			border-color: coral;
			border-radius: 30px;
			background-color:coral;	
		}
		#update{
			background-color: green;
			border-color: green;
				border-radius: 30px;
		}
		#update:hover{
			background-color: black;
			border-color: black;
		}

		#delete:hover{
			background-color: black;
			border-color: black;
		}
		.logout{
	background-color: green;
	border-color: green;
	margin-left: 90%;
	font-size: 20px;
	color: white;
}
.logout:hover{
	background-color: darkgreen;

}
.search{
	margin-top:20px;
	width:250px;
}
a{
	text-decoration: none;
	color: white;
	font-size: 30px;
}
li:hover{
		background-color: rgba(0,0,0,0.5);
}
.searchbox{

    height:30px;
}


	</style>
</head>
<body>
	<p> <span class='spanwala'>STUDENT</span> management <span> <button class='logout' ><a href='logout.php' >logout</a></button> </span></p>
	<div class='all'>
		<header id='top' class='container'>
		<h1>SGGSIE&T</h1>
	</header>
	<nav id='navbar' class='container'>
		<ul>
			<li><a href='insert.php'>new admission</a></li>
			<li><a href='dashboard.php'>DASHBOARD</a></li>
			<li><a href='dis.php'>view admissions</a></li>
		</ul>
	</nav>
	</div>";
$res=mysqli_query($conn,$sql1);
if($res->num_rows > 0)
{   echo"<br><br>";
	echo "
<form action='search.php' method='post' class='search'>
<input type='text' class='searchbox' name='searchbox' placeholder='enter firstname to search'>
<input id='update' class='searchbox' type='submit'>
</form>
"; 

 echo"<table  id='all' width='100%' border='2' style='background-color:rgba(0,0,0,0.3)'>
<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>ADDRESS</th><th>GENDER</th><th>DEPARTMENT</th><th>E-MAIL</th><th>MOBILE</th><th>HANDICAP</th><th>DOB</th><th>delete</th><th>update</th></tr>
";
	while($row = $res->fetch_assoc())
	{
		echo"<tr style='
			padding:8px;
			text-align:left;
			border-bottom:1px  solid #ddd;' ><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["address"]."</td><td>".$row["gender"]."</td><td>".$row["department"]."</td><td>".$row["mail"]."</td><td>".$row["mobile"]."</td><td>".$row["handicap"]."</td><td>".$row["dob"]."</td> <td ><button id='delete' ><a href='del_row.php?id=".$row["id"]."'>delete</a></button></td><td><button id='update'><a href='update.php?id=".$row["id"]."'>update</a></button></tr> ";


	
	;
}
echo "<br><br>";

}
else
{
	echo"NO DATA FOUND OR DATABASE IS EMPTY";
	}


}else
{
header("Location:i.php");	

}	?>	
