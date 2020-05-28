<?php
session_start();
$username=$_SESSION["user"];
if($_SESSION["user"]==true)
{ 
	echo "<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
  <link href='https://fonts.googleapis.com/css?family=Cinzel&display=swap' rel='stylesheet'>
	<style type='text/css'>
		body{
           font-family: 'Cinzel', serif;
		
			}
			.section{
				background-image:url('dashbg.jpg');
				height:700px;
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
a{
	text-decoration: none;
	color: white;
	font-size: 30px;
}
li:hover{
		background-color: rgba(0,0,0,0.5);
}


	</style>
</head>
<body>
	<p> <span class='spanwala'>STUDENT</span> management <span> <button class='logout'><a  href='logout.php' > logout</a></button> </span></p>
	<div class='all'>
		<header id='top' class='container'>
		<h1>SGGSIE&T</h1>
	</header>
	<nav id='navbar' class='container'>
		<ul>
            	<li><a href='dashboard.php'>DASHBOARD</a></li>
			<li><a href='insert.php'>NEW ADMISSIONS</a></li>
			<li><a href='dis.php?user=".$username."'>ADMISSION RECORDS</a></li>
		</ul>
	</nav>
	</div>
	<div class='section'>

	</div>

</body>
</html>";
}
else{
	header("Location:i.php");
}


?>